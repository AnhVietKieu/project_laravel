<?php


namespace App\Http\Controllers;

use App\chude;
use App\sach;
use App\tacgia;
use App\taikhoan;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user;
use App\Http\Requests\register;
use Illuminate\Support\Facades\Auth;



class Welcome extends Controller
{
    public function index()
    {
        

    	
    	$data['menubooks']=chude::menu('1');


		$data['menustorys']=chude::menu('2');

		$number_products1=chude::count_with('1');
		
		$number_products2=chude::count_with('2');
	
		$data['hot_products1']=chude::get_product('1','4',$number_products1-4);

		$data['hot_products2']=chude::get_product('1','4',$number_products1-8);

		$data['feature_products']= chude::get_product('2','8',$number_products2-8);


		return view('pages.home',$data);
        
        
    }

   
    public function search(Request $request)
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');


       $data['searchs']=sach::search($request->timkiem);
       $data['title']= $request->timkiem;

        
       return view('pages.search',$data);
    }

    public function login()
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

        return view('users.login',$data);
    }

    public function postlogin(user $request)
    {
       
       $arr = array(
        'name' => $request->Email,
        'password' =>$request->MatKhau
      );

       if(Auth::attempt($arr))
       {   
            session::put('username',Auth::User()->HoTen);
            return redirect('index.html');

       }else
       {
            session::flash('Thongbao','Dang nhap khong thanh cong');
            return redirect('login.html');
       }
        
    }

    public function register()
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

        return view('users.register',$data);
    }

    public function postregister(register $request)
    {
        $arr = array(
            'name' => $request->name,
            'password' =>$request->password
        );

        if(taikhoan::check_email($request) == true )
        {
            if(taikhoan::check_name($request) == true)
            {
                if(taikhoan::registers($request))
                {
                    if(Auth::attempt($arr))
                    {

                        session::put('username',Auth::User()->HoTen);
                        return redirect('index.html');
                    }else
                    {
                        session::flash('Thongbao','Dang nhap khong thanh cong');
                        return redirect('register.html');
                    }
                }
            }else{

                session::flash('Thongbao','Ten dang nhap bi trung');
                return redirect('register.html');
            }
        }
        else{

            session::flash('Thongbao','Ten Email bi trung');
            return redirect('register.html');
        }
           
        
    }

    public function logout()
    {
        
       if(Auth::logout()== false)
       {
            session()->forget('username');

            return redirect('index.html');
       }

        

    }

    public function contact()
    {
    	$data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

    	return view('pages.contact',$data);
    }
        

    
}
