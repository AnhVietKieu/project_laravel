<?php

namespace App\Http\Controllers;

use App\nhaxuatban;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;

class publisher extends Controller
{
    public function view()
    {
    	$data['nhaxuatbans']=nhaxuatban::all();
		return view('area.table.nhaxuatban.view',$data);
    }

    public function create(Request $request)
	{
		return view('area.table.nhaxuatban.create');
	}
	public function postcreate(Request $request)
	{
		if(nhaxuatban::insert($request->all()) == true)
		{
			session::flash('Thongbao','Them nha xuat ban thanh cong');

            return redirect()->back();
		}else
		{
			session::flash('Thongbao','Them nha xuat ban khong thanh cong');

            return redirect()->back();
		}
	}

	public function destroy($id)
	{
		
		if(nhaxuatban::deletepublisher(str_replace('.html','',$id)) == true)
		{
			session::flash('Thongbao','Xoa nhaxuatban thanh cong');

            return redirect()->back();
		}else
		{

			session::flash('Thongbao','Xoa nha xuat ban khong thanh cong');

            return redirect()->back();
		}

		
	}

	public function update($id)
	{
		$data['update_nhaxuatban'] = nhaxuatban::find(str_replace('.html','',$id));
		return view('area.table.nhaxuatban.update',$data);
	}

	public function postupdate($id,Request $request)
	{	
		$result = nhaxuatban::find($id);
        if($result) 
        {
            $result->update($request->all());

           	session::flash('Thongbao','Update nha xuat ban thanh cong');

            return redirect('admin/nhaxuatban/view-nha-xuat-ban.html');
        }else
        {

        	session::flash('Thongbao','update nha xuat ban khong thanh cong');

            return redirect()->back();
        }
        
        

			
	}
}

