<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    /*this line added by Simorgh*/
    use TarikhShamsi;

    protected $fillable = ['title','category_id', 'details', 'photo', 'source', 'views','updated_at', 'status','meta_tag','meta_description','tags'];

    protected $dates = ['created_at'];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\BlogCategory','category_id')->withDefault(function ($data) {
            foreach($data->getFillable() as $dt){
                $data[$dt] = __('Deleted');
            }
        });
    }    

}
