<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class participation extends Model
{
    protected $fillable = ['title', 'company', 'designation', 'sort_desc', 'year', 'status',];
}
