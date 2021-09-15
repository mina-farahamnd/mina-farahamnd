<?php

namespace App\Models;

use App\Traits\TarikhShamsi;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'type', 'price', 'times', 'start_date','end_date'];
    public $timestamps = false;

    use TarikhShamsi;
}
