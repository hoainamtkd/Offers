<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
	protected $fillable = ['first_name','last_name','email','phone','username','password','address','country','date','month','year','token','role','gender','status'];
	public $timestamps = false;
}
