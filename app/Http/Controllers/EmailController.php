<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
	public function indexs()
	{
		return view('admin/email/index');
	}
	public function sendmail()
	{
		return view('admin/email/send');
	}
}
