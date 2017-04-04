<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
	public function indexs()
	{
		return view('admin/news/indexes');
	}
	public function add()
	{
		return view('admin/news/add');
	}
}
