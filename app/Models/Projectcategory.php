<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Projectcategory extends Model
{
    protected $fillable = ['category_name', 'category_slug', 'status',];

    public function portfolio(){
        return $this->hasMany(Portfolio::class);
    }
}
