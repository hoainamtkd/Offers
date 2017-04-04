<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'first_name'  =>'required',
        'last_name'   =>'required',
        'email'       =>'required|email',
        'phone'       =>'required|numeric|min:10|max:11',
        'username'    =>'required|unique:members',
        'password'    =>'required|max:50',
        'cf_password' =>'required|same:password|max:50',
        'country'     =>'required',
        'date'        => 'required|numeric',
        'month'       =>'required|numeric',
        'year'        =>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
        'first_name.required'  =>'First Name is required',
        'last_name.required'   =>'Last Name is required',
        'email.required'       =>'Email is required',
        'email.email'          =>'Email Syntax don\'t correct',
        'username.required'    =>'Username is required',
        'username.unique'      =>'Username has exist',
        'password.required'    =>'Password is required',
        'password.max'         =>'Length max 50 character',
        'cf_password.required' =>'Confirm Password is required',
        'cf_password.same'     =>'Confirm Password don\'t correct',
        'cf_password.max'      =>'Length max 50 character',
        'country.required'     =>'Country is required',
        'date.required'        =>'Date is required',
        'month.required'       =>'Month is required',
        'year.required'        =>'Year is required',
        ];
    }
}
