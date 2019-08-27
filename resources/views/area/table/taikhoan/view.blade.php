@extends('area.template.master_admin')
@section('content')

	
@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> {{session('Thongbao')}}</div>
@endif

<script>
$(document).ready(function(){
  $("#myusername").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myuser tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<input id="myusername" type="text" placeholder="Search my mã người dùng ..." style="width: 500px; float: right;">
<p style="padding: 40px;"></p>

<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng tài khoản</b></div>
    	<table class='table' border=1px>
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
		     	<th width:200px height:100px;>Mã người dùng</th>
                <th width:200px height:100px;>Họ tên</th>
                <th width:200px height:100px;>Tên đăng nhập</th>
                
                  <th width:200px height:100px;>Ngày sinh</th>
                   <th width:200px height:100px;>Giới tính</th>
                   <th width:200px height:100px;>Địa chỉ</th>
                   <th width:200px height:100px;>Mã quyền hạn</th>
                <th >Tình trạng</th>
                <th >Sửa thông tin</th>
                <th>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody id="myuser">
	   
	        @foreach($taikhoans as $du_lieu)
			
				  <tr>
			        <td width:200px height:100px;>
				     
					{{$du_lieu->MaNguoiDung }}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->HoTen }}
					
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->name }}
					
				     </td width:200px height:100px;>
				    
				     <td width:200px height:100px;>
				     	
					 {{$du_lieu->NgaySinh }}
				
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->GioiTinh}} 
				
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->DiaChi}}
				
				     </td width:200px height:100px;>
				     
				    
				     <td width:200px height:100px;>
				     	
					{{ $du_lieu->MaQuyenHan}}
				     </td width:200px height:100px;>
				    
				     <td width:200px height:100px;>
				     	
					{{$du_lieu->TinhTrang }}				
				    </td >
				     <td >
				      <a class="btn btn-default" href="admin/taikhoan/update-tai-khoan/{{$du_lieu->MaNguoiDung }}.html">Sửa
				     </td >
				      <td >
				      <a class="btn btn-default" href="admin/taikhoan/delete-tai-khoan/{{ $du_lieu->MaNguoiDung}}.html" onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
				     </td >
				    </tr>
	             
	                @endforeach
	             
	 	   </tbody>
	    </table> 
</div>
</body>
</html>


@endsection