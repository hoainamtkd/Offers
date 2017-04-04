<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function indexs()
	{
		return view('admin/catalog/indexes');
	}
	public function detail()
	{
		return view('admin/catalog/details');
	}
	public function add()
	{
		return view('admin/catalog/add');
	}
}
