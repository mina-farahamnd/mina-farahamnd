<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  
  /*this line added by simorgh*/
  use TarikhShamsi;

  public function user()
  {
      return $this->belongsTo('App\Models\User')->withDefault(function ($data) {
        foreach($data->getFillable() as $dt){
            $data[$dt] = __('Deleted');
        }
    });
  }

}
