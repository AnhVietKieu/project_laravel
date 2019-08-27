<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhaxuatban extends Model
{
    protected $table ='nhaxuatban';
    protected $primaryKey ='MaNXB';

    public $timestamps = false;

    protected $fillable = [
        'TenNXB','DiaChi','DienThoai','GhiChu','TinhTrang'
    ];

    public static function deletepublisher($id)
		{
			$MaSach = sach::select('MaSach')->where('MaNXB',$id)->first();

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
								if(nhaxuatban::destroy($id))
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
					if(nhaxuatban::destroy($id))
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
					if(nhaxuatban::destroy($id))
					{
						return true;
					}else
					{
						return false;
					}
				}

			
			
		}
}
