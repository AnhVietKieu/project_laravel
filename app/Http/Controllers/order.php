<?php

namespace App\Http\Controllers;

use App\donhang;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;


class order extends Controller
{
   public function view()
	{
		
		$data['donhangs']=donhang::all();
		return view('area.table.donhang.view',$data);
		
	}
}
