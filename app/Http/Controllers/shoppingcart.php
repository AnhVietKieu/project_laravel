<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chude;
use App\sach;
use App\taikhoan;
use Session;
use Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationship;
use App\Http\Controllers\Controller;
use App\Http\Requests\manage;

class shoppingcart extends Controller
{
    public function view()
    {
    	$data['menubooks']=chude::menu('1');

		$data['menustorys']=chude::menu('2');
       
        $data['list'] = Cart::content();

    	return view('shoppingcart.cart',$data);
    }

    public function insert($id)
    {
    	$data['menubooks']=chude::menu('1');

		$data['menustorys']=chude::menu('2');

        $sach = sach::where('MaSach',$id)->first();
       
        $arr = array(
            'id' => $sach->MaSach,
            'name' => $sach->TenSach,
            'qty' => 1,
            'price' => $sach->GiaBia,
            'weight' =>500
            
        );
       
        if(Cart::add($arr))
        {
            return redirect('giohang.html');
            
        }else
        {
            echo "Them that bai";
        }
       
    	
    }

    public function update_tang($id)
    {
    	$data['menubooks']=chude::menu('1');

		$data['menustorys']=chude::menu('2');

        foreach(Cart::content() as $row)
        {
            if($row->rowId ==$id)
            {
                $qty=$row->qty;
            }
        }

        if(Cart::update($id,$qty+1))
        {
             return redirect('giohang.html');
        }

    	
    }
     public function update_giam($id)
    {
        $data['menubooks']=chude::menu('1');

        $data['menustorys']=chude::menu('2');

        foreach(Cart::content() as $row)
        {
            if($row->rowId ==$id)
            {
                $qty=$row->qty;
            }
        }
        if($qty<2)
        {
           
            return redirect('giohang.html')->with('Thongbao','Khong the giam san pham < 1 ');
        }else
        {
            if(Cart::update($id,$qty-1))
        {
             return redirect('giohang.html');
        }
        }
        
    }

    public function destroy($id)
    {
    	$data['menubooks']=chude::menu('1');

		$data['menustorys']=chude::menu('2');
        if(Cart::remove($id)== false)
        {
            return redirect('giohang.html');  
        }

       

    	
    }
}
