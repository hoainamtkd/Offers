<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
	public function indexs()
	{
		return view('admin/ads/indexes');
	}
	public function add()
	{
		return view('admin/ads/add');
	}
}
