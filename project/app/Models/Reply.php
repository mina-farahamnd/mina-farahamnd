<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    /*this line added by Simorgh*/
    use TarikhShamsi;

    protected $fillable = ['comment_id', 'user_id','text'];
    
    public function user()
    {
    	return $this->belongsTo('App\Models\User')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }

    public function comment()
    {
    	return $this->belongsTo('App\Models\Comment')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }

	public function subreplies()
	{
	     return $this->hasMany('App\Models\SubReply')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
	}
}
