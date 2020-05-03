<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skillheader;

class Skill extends Model
{
    protected $fillable = ['header_id','title', 'value', 'status',];

    public function Skillheader(){
    	return $this->belongsTo(Skillheader::class);
    }
}
