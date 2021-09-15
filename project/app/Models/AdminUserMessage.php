<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class AdminUserMessage extends Model
{

    /*this line added by Simorgh*/
    use TarikhShamsi;

    protected $fillable = ['conversation_id','message','user_id'];
	public function conversation()
	{
	    return $this->belongsTo('App\Models\AdminUserConversation','conversation_id')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
	}
}
