<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.home');
    }
}
