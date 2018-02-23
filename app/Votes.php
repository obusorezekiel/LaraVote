<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
        protected $table = 'votes';
        public $primaryKey = 'id';
        public $timestamps = true;
    
    
        public function user(){
            return $this->belongsTo('App\User');
        }
        
}
Votes::all();

