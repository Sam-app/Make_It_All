<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //
    protected $table = 'calls';

    public $primary_key = 'id';



   public function problem(){
      return $this->belongsTo('App\Problem');
   }
}
