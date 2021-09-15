<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{

  /*this line added by Simorgh*/
  use TarikhShamsi;

  protected $fillable = ['attribute_id', 'name'];

  public function attribute() {
    return $this->belongsTo('App\Models\Attribute')->withDefault(function ($data) {
      foreach($data->getFillable() as $dt){
          $data[$dt] = __('Deleted');
      }
  });
  }
}
