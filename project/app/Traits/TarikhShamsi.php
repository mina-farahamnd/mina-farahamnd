<?php 

namespace App\Traits;
use Hekmatinasser\Verta\Verta;

trait TarikhShamsi{

    
    public function getCreatedAtAttribute($value)
    {
        return $this->jalaliDate($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return $this->jalaliDate($value);
    }

    public function getStartDateAttribute($value)
    {
        return $this->jalaliDate($value);
    }

    public function getEndDateAttribute($value)
    {
        return $this->jalaliDate($value);
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $this->getGregorian($value);
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $this->getGregorian($value);
    }

    private function getGregorian($date){
        $date = explode('/' , $date);
        $date = Verta::getGregorian($date[0],$date[1],$date[2]);
        return implode('-',$date);
    }

    private function jalaliDate($value){
        $v = new Verta($value);
        $v->timezone = 'Asia/Tehran';
        return $v;
    }

}