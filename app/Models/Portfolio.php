<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Projectcategory;

class Portfolio extends Model
{
    protected $fillable = ['category_id', 'project_name', 'image','status',];


    public function Projectcategory(){
        return $this->belongsTo(Projectcategory::class, 'category_id','id') ;
    }
}


