<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chude extends Model
{
	protected $table ='chude';
	protected $primaryKey ='MaChuDe';
	public $timestamps = false;

 	protected $fillable = [
        'TenChuDe','TheLoai','GhiChu','TinhTrang','MaLinkChuDe'
    ];

	public function sach()
	{
		return $this->hasMany('App\sach', 'MaChuDe','MaChuDe');

	}

	public static function menu($id)
	{
		return chude::where('TheLoai',$id)->get();
	}
	
	public static function count_with($id)
	{
		return chude::join('sach','chude.MaChuDe','=','sach.MaChuDe')->where('chude.TheLoai',$id)->count('MaSach');
	}	

	public static function get_product($id,$offer,$limit)
	{
		return chude::join('sach','chude.MaChuDe','=','sach.MaChuDe')->where('chude.TheLoai',$id)->limit($offer,$limit)->get();
	}	

	public static function search_category($value)
	{
		return chude::where('MaLinkChuDe',str_replace('.html','', $value))->first();
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
	        $text = strtolower(chude::utf8convert($text));
	        $text = str_replace( "ß", "ss", $text);
	        $text = str_replace( "%", "", $text);
	        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
	        $text = str_replace(array('%20', ' '), '-', $text);
	        $text = str_replace("----","-",$text);
	        $text = str_replace("---","-",$text);
	        $text = str_replace("--","-",$text);
			return $text;
		}

		public static function insertcategory($request)
		{
			

			$arr = [
            'TenChuDe' => $request->TenChuDe,
            'TheLoai' => $request->TheLoai,
            'GhiChu' => $request->GhiChu,
            'TinhTrang' => $request->TinhTrang
            
        ];
	        if(chude::insert($arr))
	        {
	            if(chude::where('TenChuDe',$request->TenChuDe)->first())
	            {
	            	$MaChuDe = chude::where('TenChuDe',$request->TenChuDe)->first();

	            	$MaLinkChuDe = chude::utf8tourl($request->TenChuDe.' '.$MaChuDe->MaChuDe);

		            $arr1 = [
			            'MaLinkChuDe' =>$MaLinkChuDe
            
       				 ];
       				 $result = chude::find($MaChuDe->MaChuDe);

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

		public static function updatecategory($id,$request)
		{
			$MaLinkChuDe = chude::utf8tourl($request->TenChuDe.' '.$id);

			$arr = [
	            'TenChuDe' => $request->TenChuDe,
	            'TheLoai' => $request->TheLoai,
	            'GhiChu' => $request->GhiChu,
	            'TinhTrang' => $request->TinhTrang,
	            'MaLinkChuDe' =>$MaLinkChuDe
            
        	];

        	$result = chude::find($id);
        	 if($result)
			 {
			 	$result->update($arr);
			 	return true;
			 }else
			 {
			 	return false;
			 }

		}

		public static function deletecategory($id)
		{
			$MaSach = sach::select('MaSach')->where('MaChuDe',$id)->first();

			if($MaSach !=null)
			{
				$MaCTDH = chitietdonhang::where('MaSach',$MaSach->MaSach)->first();

				if($MaCTDH != null)
			{
				$MaDonHang = donhang::where('MaCTDH',$MaCTDH->MaCTDH);

				if($MaDonHang != null)
				{
					if(donhang::destroy($MaDonHang->MaDonHang))
					{
						if(chitietdonhang::destroy($MaCTDH->MaCTDH))
						{
							if(sach::destroy($MaSach->MaSach))
							{
								if(chude::destroy($id))
								{
									return true;
								}else
								{
									return false;
								}
							}
						}
					}
				}
			}else
			{

				if(sach::destroy($MaSach->MaSach))
				{
					if(chude::destroy($id))
					{
						return true;
					}else
					{
						return false;
					}

				}	
				
			}

			}else
				{
					if(chude::destroy($id))
					{
						return true;
					}else
					{
						return false;
					}
				}

			
			
		}
}
