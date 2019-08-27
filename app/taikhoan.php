<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    protected $table ='taikhoan';
    protected $primaryKey ='MaNguoiDung';

    public $timestamps = false;

    protected $fillable = [
     	'HoTen','TaiKhoan','MatKhau','NgaySinh','GioiTinh','DiaChi','Email','MaQuyenHan','GhiChu','TinhTrang','_token'
    ];

    public static function registers($request)
    {
    	$arr = [
    		'HoTen' => $request->HoTen,
    		'name' => $request->name,
    		'password' => bcrypt($request->password),
    		'NgaySinh' => $request->NgaySinh,
    		'GioiTinh' =>$request->GioiTinh,
    		'DiaChi' => $request->DiaChi,
    		'Email' => $request->Email
    	];
    	if(taikhoan::insert($arr))
    	{
    		return true;
    	}else{
    		return false;
    	}
    } 

        public static function insertaccount($request)
    {
        $arr = [
            'HoTen' => $request->HoTen,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'NgaySinh' => $request->NgaySinh,
            'GioiTinh' =>$request->GioiTinh,
            'DiaChi' => $request->DiaChi,
            'Email' => $request->Email,
            'MaQuyenHan' =>$request->MaQuyenHan,
            'GhiChu' => $request->GhiChu,
            'TinhTrang' => $request->TinhTrang
        ];
        if(taikhoan::insert($arr))
        {
            return true;
        }else{
            return false;
        }
    } 

     public static function updateaccount($id,$request)
    {
        $arr = [
            'HoTen' => $request->HoTen,
            'name' => $request->name,
            'password' => md5($request->password),
            'NgaySinh' => $request->NgaySinh,
            'GioiTinh' =>$request->GioiTinh,
            'DiaChi' => $request->DiaChi,
            'Email' => $request->Email,
            'MaQuyenHan' =>$request->MaQuyenHan,
            'GhiChu' => $request->GhiChu,
            'TinhTrang' => $request->TinhTrang
        ];
        $result = taikhoan::find($id);
        if($result) 
        {
            $result->update($arr);

            return true;
            
        }else
        {
            return false;
        }
    } 

    public static function check_email($request)
    {
    	if(taikhoan::where('Email',$request->Email)->count()>0)
    	{
    		return false;
    	}else
    	{
    		return true;
    	}
    }

    public static function check_name($request)
    {
    	if(taikhoan::where('name',$request->name)->count() > 0)
    	{
    		return false;
    	}
    	else{
    		return true;
    	}
    }

    public static function login($request)
    {
    	$arr = [
    		'Email' => $request->Email,
    		'MatKhau' => md5($request->MatKhau)
    	];
    	if(taikhoan::where($arr)->count()>0)
    	{
    		return taikhoan::where($arr)->first();
    	}else
    	{
    		return false;
    	}
    }   
}
