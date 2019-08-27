<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    //
    protected $table ='sach';
    protected $primaryKey ='MaSach';

    public $timestamps = false;


    protected $fillable = [
        'TenSach','AnhBia','MoTa','NamXuatBan','NgayVaoKho','GiaBia','SoLuong','MaChuDe','MaNXB','MaTacGia','GhiChu','TinhTrang','MaLinkSach'
    ];
    
    public function chude()
    {
    	return $this->belongsto('App\chude','MaChuDe','MaChuDe');
    	
    }

    public function tacgia()
    {
        return $this->hasOne('App\tacgia','MaTacGia','MaTacGia');
        
    }

    public static function search($request)
    {
    	return sach::where('TenSach','like','%'.$request.'%')->get();
    }
    public static function get_all_product($where,$value)
    {
    	return sach::join('chude','chude.MaChuDe','=','sach.MaChuDe')->join('nhaxuatban','nhaxuatban.MaNXB','=','sach.MaNXB')->join('tacgia','tacgia.MaTacGia','=','sach.MaTacGia')->where($where,str_replace('.html','', $value));


    }
    public static function get_same_product($where1,$value1,$where2,$value2)
    {
    	
        return sach::join('chude','chude.MaChuDe','=','sach.MaChuDe')->where($where1,$value1)->where($where2,'!=',$value2);
    }

    public static function utf8convert($str) {

                        if(!$str) return false;

                        $utf8 = array(

                    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

                    'd'=>'đ|Đ',

                    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

                    'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

                    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

                    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

                    'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

                                                        );

                        foreach($utf8 as $ascii=>$uni)
                         $str = preg_replace("/($uni)/i",$ascii,$str);

        return $str;

        }

        public static function utf8tourl($text){
            $text = strtolower(sach::utf8convert($text));
            $text = str_replace( "ß", "ss", $text);
            $text = str_replace( "%", "", $text);
            $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
            $text = str_replace(array('%20', ' '), '-', $text);
            $text = str_replace("----","-",$text);
            $text = str_replace("---","-",$text);
            $text = str_replace("--","-",$text);
            return $text;
        }

        public static function insertbook($request,$AnhBia)
        {
            $MoTa = str_replace('<p>','',$request->MoTa);
            $MoTa = str_replace('</p>','',$MoTa);

            $arr = [
            'TenSach' => $request->TenSach,
            'GiaBia' => $request->GiaBia,
            'MoTa' => $MoTa,
            'AnhBia' => $AnhBia,
            'NamXuatBan' => $request->NamXuatBan,
            'NgayVaoKho' => $request->NgayVaoKho,
            'SoLuong' => $request->SoLuong,
            'MaNXB' => $request->MaNXB,
            'MaTacGia' => $request->MaTacGia,
            'MaChuDe' => $request->MaChuDe,
            'GhiChu' => $request->GhiChu,
            'TinhTrang' => $request->TinhTrang
            
        ];
            if(sach::insert($arr))
            {
                if(sach::where('TenSach',$request->TenSach)->first())
                {
                    $MaSach = sach::where('TenSach',$request->TenSach)->first();

                    $MaLinkSach = sach::utf8tourl($request->TenSach.' '.$MaSach->MaSach);

                    $arr1 = [
                        'MaLinkSach' =>$MaLinkSach
            
                     ];
                     $result = sach::find($MaSach->MaSach);

                     if($result)
                     {
                        $result->update($arr1);
                        return true;
                        
                     }
                }
            }else{
                return false;
            }
        }

        public static function updatecategory($id,$request,$AnhBia)
        {
            $MaLinkSach = sach::utf8tourl($request->TenSach.' '.$id);
            $MoTa = str_replace('<p>','',$request->MoTa);
            $MoTa = str_replace('</p>','',$MoTa);
            
             $arr = [
            'TenSach' => $request->TenSach,
            'GiaBia' => $request->GiaBia,
            'MoTa' => $MoTa,
            'AnhBia' => $AnhBia,
            'NamXuatBan' => $request->NamXuatBan,
            'NgayVaoKho' => $request->NgayVaoKho,
            'SoLuong' => $request->SoLuong,
            'MaNXB' => $request->MaNXB,
            'MaTacGia' => $request->MaTacGia,
            'MaChuDe' => $request->MaChuDe,
            'GhiChu' => $request->GhiChu,
            'TinhTrang' => $request->TinhTrang,
             'MaLinkSach' =>$MaLinkSach
            
        ];

            $result = sach::find($id);
             if($result)
             {
                $result->update($arr);
                return true;
             }else
             {
                return false;
             }

        }
}
