<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class OrderTrack extends Model
{
    /*this line added by Simorgh*/
    use TarikhShamsi;

	protected $fillable = ['order_id', 'title','text'];

    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }

}
