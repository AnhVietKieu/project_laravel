@extends('area.template.master_admin')
@section('content')

@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong>{{session('Thongbao')}}
</div>
@endif
<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng tác giả</b></div>
    	<table class='table' border=1px>
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
                <th width:200px height:100px;>Mã tác giả</th>
                <th width:200px height:100px;>Tên tác giả</th>
                <th width:200px height:100px;>Ngày sinh</th>
                <th width:200px height:100px;>Giới tính</th>
                <th width:200px height:100px;>Địa chỉ</th>
                <th width:200px height:100px;>Email</th>
                <th width:200px height:100px;>Tiểu sử</th>
                <th width:200px height:100px;>Vị Trí</th>
                <th width:200px height:100px;>Tình trạng</th>
                <th width:200px height:100px;>Sửa thông tin</th>
                <th width:200px height:100px;>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody>
	   	  @foreach($tacgias as $du_lieu)
				  <tr>
			         <td width:200px height:100px;>
			         
					 {{$du_lieu->MaTacGia }}
                   
			         </td width:200px height:100px>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->TenTacGia }}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->NgaySinh}}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->GioiTinh}}
				
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->DiaChi }}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->Email}} 
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->TieuSu}}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->ViTri}}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->TinhTrang }}
					
				    </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     <a class="btn btn-default" href="admin/tacgia/update-tac-gia/{{ $du_lieu->MaTacGia}}.html">Sửa
				     </td width:200px height:100px;>
				      <td width:200px height:100px;>
				      <a class="btn btn-default" href="admin/tacgia/delete-tac-gia/{{ $du_lieu->MaTacGia}}.html" onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
				     </td width:200px height:100px;>
				    </tr>
	             
	                @endforeach
	             
	 	   </tbody>
	    </table> 
</div>


@endsection