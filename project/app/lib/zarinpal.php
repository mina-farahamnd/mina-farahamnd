<?php
namespace App\lib;

use App\Models\Order;
use Illuminate\Http\Request;
use nusoap_client;

class zarinpal
{
    public $MerchantID;
    public function __construct()
    {
        $this->MerchantID="e8ded43a-3357-46a8-9e8f-01bb3c51449d";
    }
    public function pay($Amount,$Email,$Mobile)
    {
 
        $Description = 'فروش محصول';  // Required
        $CallbackURL = url('/order/tracking'); // Required
    
    
        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID'     => $this->MerchantID,
                'Amount'         => $Amount,
                'Description'    => $Description,
                'Email'          => $Email,
                'Mobile'         => $Mobile,
                'CallbackURL'    => $CallbackURL,
            ],
        ]);
    
        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }
    }
    public function order(Request $request,$Amount){
 
        $Authority =$request->get('Authority') ;
        

        if ($request->get('Status') == 'OK') {
            $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
            $client->soap_defencoding = 'UTF-8';
 
            $result = $client->call('PaymentVerification', [
                [
                    'MerchantID'     => $this->MerchantID,
                    'Authority'      => $Authority,
                    'Amount'         => $Amount,
                ],
            ]);
            if ($result['Status'] == 100) {
                    return true;
 
            } else {
                    return false;
            }
        }
        else
        {
            return false;
        } 
    }
 
}