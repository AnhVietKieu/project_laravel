<?php

namespace App\Http\Controllers;

use App\taikhoan;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;


class account extends Controller
{
    public function view()
    {
    	$data['taikhoans']=taikhoan::all();
		return view('area.table.taikhoan.view',$data);
    }

    public function create(Request $request)
	{
		return view('area.table.taikhoan.create');
	}
	public function postcreate(Request $request)
	{
		if(taikhoan::insertaccount($request) == true)
		{
			session::flash('Thongbao','Them tai khoan thanh cong');

            return redirect()->back();
		}else
		{
			session::flash('Thongbao','Them tai khoan khong thanh cong');

            return redirect()->back();
		}
	}

	public function destroy($id)
	{
		
		if(taikhoan::destroy(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa tai khoan thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa tai khoan khong thanh cong');

            return redirect()->back();
		}

		
	}

	public function update($id)
	{
		$data['update_taikhoan'] = taikhoan::find(str_replace('.html','',$id));
		return view('area.table.taikhoan.update',$data);
	}

	public function postupdate($id,Request $request)
	{	
		
        if(taikhoan::updateaccount($id,$request) == true) 
        {
            
           	session::flash('Thongbao','Update tai khoan thanh cong');

            return redirect('admin/taikhoan/view-tai-khoan.html');
        }else
        {

        	session::flash('Thongbao','update tai khoan khong thanh cong');

            return redirect()->back();
        }
        
        

			
	}
}
