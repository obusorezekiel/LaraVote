<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $table = 'voters';
    public $primaryKey = 'id';
    public $timestamps = true;
    
 }
 Voter::all();
