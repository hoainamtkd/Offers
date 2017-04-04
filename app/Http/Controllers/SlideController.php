<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function indexs()
    {
    	return view('admin/slide/index');
    }
    public function add()
    {
    	return view('admin/slide/add');
    }
}
