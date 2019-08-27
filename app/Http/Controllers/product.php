<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resquest;
use App\Http\Controllers\Controller;
use App\chude;
use App\sach;


class product extends Controller
{

    public function product_book()
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

		$data['feature_products']=sach::get_all_product('chude.TheLoai','2')->paginate(6);

		return view('products.product_book',$data);
    }

    public function product_story()
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

		$data['feature_products']=sach::get_all_product('chude.TheLoai','2')->paginate(6);

		return view('products.product_story',$data);
    }


   

     public function detail($value)
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

        $data['chitietsach']=sach::get_all_product('MaLinkSach',$value)->first();

        $machude=sach::where('MaLinkSach',str_replace('.html','', $value))->first();
        
          
        $data['products']=  sach::get_same_product('chude.MaChuDe',$machude->MaChuDe,'MaSach',$machude->MaSach)->limit('4','0')->get();

        return view('products.product_detail',$data);
    }

     public function category($value)
    {
        $data['menubooks']=chude::menu('1');
        $data['menustorys']=chude::menu('2');

        $data['chude'] = chude::search_category($value);

        $data['feature_products']=sach::get_all_product('MaLinkChuDe',$value)->get();

       
        return view('products.category',$data);
    }

    


}
