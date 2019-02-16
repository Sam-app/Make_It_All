<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problems';

    public $primary_key = 'id';


    public function user(){

        return $this->belongsTo('App\User');
    }

    public function calls(){

        return $this->hasMany('App\Call');
    }
}
