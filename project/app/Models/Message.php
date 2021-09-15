<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /*this line added by Simorgh*/
    use TarikhShamsi;

    protected $fillable = ['conversation_id','message','sent_user','recieved_user'];
	public function conversation()
	{
	    return $this->belongsTo('App\Models\Conversation')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
	}
}
