<?php

namespace App\Http\Controllers\User;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    //

    public function loadAddress()
    {
        $addresses = Auth::user()->addresses;
        return view('front.inc.load_full_address' , compact('addresses'));
    }
    public function getSuggestAddress(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        $client = new Client;
        $url = config('global.map_api') . 'v1/search';
        $search = $request->search;
        try
        {
            $res = $client->request('GET', $url, [
                'headers' => ['Accept' => 'application/json', 'Api-Key' => config('global.map_key')],
                'query' => ['term' => $search , 'lat' => '35.699739' , 'lng' => '51.338097']
            ]);

            $address =  json_decode($res->getBody()->getContents());
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                return json_encode(['error' => $e->getResponse()->getReasonPhrase() , 'code' => $e->getCode() , 'body' => null]);
            }else
                return json_encode(['error' => $e->getMessage() , 'code' => $e->getCode() , 'body' => null]);
        }

        return view('front.inc.load_suggest_address' , compact('address'));
    }

    public function getAddressWithCoordinate(Request $request)
    {
        $request->validate([
            'lat' => 'required',
            'lng' => 'required'
        ]);
        $client = new Client;
        $url = config('global.map_api') . 'v2/reverse';
        $search = $request->search;
        try
        {
            $res = $client->request('GET', $url, [
                'headers' => ['Accept' => 'application/json', 'Api-Key' => config('global.map_key')],
                'query' => ['lat' => $request->lat , 'lng' => $request->lng]
            ]);

            $address =  $res->getBody()->getContents();
            return response()->json($address);
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                return json_encode(['error' => $e->getResponse()->getReasonPhrase() , 'code' => $e->getCode() , 'body' => null]);
            }else
                return json_encode(['error' => $e->getMessage() , 'code' => $e->getCode() , 'body' => null]);
        }
        
    }


}
