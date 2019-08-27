<?php

namespace App\Http\Controllers;

use App\chude;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;

class category extends Controller
{
   public function view()
	{
		
		$data['chudes']=chude::all();

		return view('area.table.chude.view',$data);

		
	}

	public function create(Request $request)
	{
		return view('area.table.chude.create');
	}
	public function postcreate(Request $request)
	{
		if(chude::insertcategory($request) == true)
		{
			session::flash('Thongbao','Them chu de thanh cong');

            return redirect()->back();
		}else
		{
			session::flash('Thongbao','Them chu de khong thanh cong');

            return redirect()->back();
		}
	}

	public function destroy($id)
	{
		if(chude::deletecategory(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa chu de thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa chu de khong thanh cong');

            return redirect()->back();
		}

		
	}

	public function update($id)
	{
		$data['update_chude'] = chude::find(str_replace('.html','',$id));
		return view('area.table.chude.update',$data);
	}

	public function postupdate($id,Request $request)
	{	
		
        if(chude::updatecategory(str_replace('.html','',$id),$request)== true) 
        {

           	session::flash('Thongbao','Update chu de thanh cong');

            return redirect('admin/chude/view-chu-de.html');
        }else
        {

        	session::flash('Thongbao','update chu de khong thanh cong');

            return redirect()->back();
        }
        
        

			
	}
}
