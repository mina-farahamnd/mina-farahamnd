<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    /*This line added by Simorgh*/
    use TarikhShamsi;

   protected $fillable = ['user_id', 'subscription_id', 'title', 'currency', 'currency_code', 'price', 'days', 'allowed_products', 'details', 'method', 'txnid', 'charge_id', 'created_at', 'updated_at', 'status'];

    public function user()
    {
        return $this->belongsTo('App\Models\User')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }

}
