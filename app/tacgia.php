<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tacgia extends Model
{
	protected $table ='tacgia';
    protected $primaryKey ='MaTacGia';
    public $timestamps = false;

    protected $fillable = [
        'TenTacGia','NgaySinh','GioiTinh','DiaChi','Email','TieuSu','ViTri','TinhTrang'
    ];

    public static function deleteauthor($id)
		{
			$MaSach = sach::select('MaSach')->where('MaTacGia',$id)->first();

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
								if(tacgia::destroy($id))
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
					if(tacgia::destroy($id))
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
					if(tacgia::destroy($id))
					{
						return true;
					}else
					{
						return false;
					}
				}

			
			
		}
}
