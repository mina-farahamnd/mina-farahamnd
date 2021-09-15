<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

	/*this line added by Simorgh*/
	use TarikhShamsi;

	public function sent()
	{
	    return $this->belongsTo('App\Models\User', 'sent_user')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
	}

	public function recieved()
	{
	    return $this->belongsTo('App\Models\User', 'recieved_user')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
	}

	public function messages()
	{
	    return $this->hasMany('App\Models\Message');
	}

}
