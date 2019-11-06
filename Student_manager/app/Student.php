<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name', 'phone', 'address','city_id','image'
    ];
    public function City(){
        return $this->belongsTo('App\City');
    }
}
