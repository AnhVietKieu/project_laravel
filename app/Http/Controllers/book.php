<?php

namespace App\Http\Controllers;

use App\chude;
use App\sach;
use App\tacgia;
use App\nhaxuatban;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;

class book extends Controller
{
    public function create(Request $request)
	{
		$data['chudes']=chude::all();
		$data['nhaxuatbans']=nhaxuatban::all();
		$data['tacgias']=tacgia::all();

		return view('area.table.sach.create',$data);
	}
	public function postcreate(Request $request)
	{

		$file = $request->AnhBia;

        if($file->move('public/thuvien/images/sach', $file->getClientOriginalName())){
	        if(sach::insertbook($request,$file->getClientOriginalName()) == true)
			{
				session::flash('Thongbao','Them sach thanh cong');

	            return redirect()->back();
			}else
			{
				session::flash('Thongbao','Them sach khong thanh cong');

	            return redirect()->back();
			}
        }else
        {
        	session::flash('Thongbao','Them sach khong thanh cong');

	            return redirect()->back();	
        }

		
	}

	public function destroy($id)
	{
		if(sach::deletecategory(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa sach thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa sach khong thanh cong');

            return redirect()->back();
		}

		
	}

	public function update($id)
	{
		$data['du_lieu'] = sach::find(str_replace('.html','',$id));
		
		$data['chudes']=chude::all();
		$data['nhaxuatbans']=nhaxuatban::all();
		$data['tacgias']=tacgia::all();

		return view('area.table.sach.update',$data);
	}

	public function postupdate($id,Request $request)
	{	
		$file = $request->AnhBia;
		$Sach = sach::find($id);

		if($request->AnhBia == null)
		{
			$AnhBia = $Sach->AnhBia;

			if(sach::updatecategory(str_replace('.html','',$id),$request,$AnhBia) == true) 
		    {

		       		session::flash('Thongbao','Update sach thanh cong');

      				return redirect('admin/view.html');

		    }else
		    {

		    	session::flash('Thongbao','update sach khong thanh cong');

		        return redirect()->back();
		    }

		}else
		{
			if($file->getClientOriginalName() == $Sach->AnhBia)
			{
				if(sach::updatecategory(str_replace('.html','',$id),$request,$Sach->AnhBia))
				{
		           	session::flash('Thongbao','Update sach thanh cong');

	          		return redirect('admin/view.html');

				}
			}else
			{
				if($file->move('public/thuvien/images/sach', $file->getClientOriginalName()))
				{
					if(sach::updatecategory(str_replace('.html','',$id),$request,$file->getClientOriginalName()) == true) 
				    {

				       		session::flash('Thongbao','Update sach thanh cong');

	          				return redirect('admin/view.html');

				    }else
				    {

				    	session::flash('Thongbao','update sach khong thanh cong');

				        return redirect()->back();
				    }
				}
			}
		}
		
	}
/*
	public function destroy($id)
	{
		if(sach::deletebook(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa sach thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa sach khong thanh cong');

            return redirect()->back();
		}

		
	}
	*/
}
