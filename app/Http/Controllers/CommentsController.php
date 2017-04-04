<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function indexs()
    {
    	return view('admin/comments/index');
    }
}
