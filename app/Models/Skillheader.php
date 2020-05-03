<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;
class Skillheader extends Model
{
    protected $fillable = ['header_name', 'status',];


    public function Skill(){
    	return $this->hasMany(Skill::class);
    } 
}
