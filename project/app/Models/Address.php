<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = ['user_id','title','address','province','city','phone','lat','lng','post_code'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
