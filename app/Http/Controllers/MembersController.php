<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Members;
use File;
use App\Http\Requests\MembersRequest;
use Illuminate\Support\Facades\Input;
use Request;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
    public function indexs()
    {
    	return view('admin/members/indexs');
    }
    public function getAdd()
    {
    	return view('admin/members/add');
    }
    public function postAdd(MembersRequest $request)
    {
        $data                = new Members();
        $result              = $request->all();
        $data['first_name']  = $result['first_name'];
        $data['last_name']   = $result['last_name'];
        $data['email']       = $result['email'];
        $data['phone']       = $result['phone'];
        $data['username']    = $result['username'];
        $data['password']    = $result['password'];
        $data['country']     = $result['country'];
        $data['date']        = $result['date'];
        $data['month']       = $result['month'];
        $data['year']        = $result['year'];
        $data['address']     = $result['address'];
        $data['role']        = $result['role'];
        $data['gender']      = $result['gender'];
        $data['status']      = $result['status'];
        $data['token']        = $result['_token'];
        $data->save();
        return redirect('admin/members/add')->with('message','Add Successfull');
    }
    public function details()
    {
        return view('admin/members/detail');
    }
    public function blocks()
    {
        return view('admin/members/blocks');
    }
    public function social()
    {
        return view('admin/members/social');
    }
}
