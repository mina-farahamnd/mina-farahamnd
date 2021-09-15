<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    /*this line added by Simorgh*/
    use TarikhShamsi;

    protected $fillable = ['provider_id','provider'];


    function user()
    {
        return $this->belongsTo(User::class)->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }
}
