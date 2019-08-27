<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\chude;
use App\sach;
use App\taikhoan;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use App\Http\Requests\manage;
use Illuminate\Support\Facades\Auth;


class quantri extends Controller
{
    public function login()
    {
    	return view('area.template.login');
    	
    }
    public function postlogin(manage $request)
    {


       $arr = array(
        'name' => $request->Email,
        'password' =>$request->MatKhau
      );

       if(Auth::attempt($arr))
       {
            $usernames =Auth::User()->MaQuyenHan; 

            
            if($usernames == 1)
            {
                session::put('username',Auth::User()->HoTen);
                session::put('level',Auth::User()->MaQuyenHan);

                return redirect('admin/view.html');
            }else{

                session::flash('Thongbao','Dang nhap khong thanh cong');
                return redirect('admin.html');
            }
       }else
       {
            session::flash('Thongbao','Dang nhap khong thanh cong');
            return redirect('admin.html');
       }

    	
    }

    public function logout_admin()
    {
        session()->forget('username');

        return redirect('admin.html');

    }

    public function view()
    {
    	$data['sachs'] = sach::all();
      return view('area.table.sach.view',$data);
    }    
    
}
