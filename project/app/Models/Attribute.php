<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /*this line added by Simorgh*/
    use TarikhShamsi;


    protected $fillable = ['attributable_id', 'attributable_type', 'name', 'input_name', 'price_status', 'details_status' , 'search_status'];

    public function attributable() {
      return $this->morphTo();
    }

    public function attribute_options() {
      return $this->hasMany('App\Models\AttributeOption');
    }
}
