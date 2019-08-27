@extends('area.template.master_admin')
@section('content')
	

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong>{{session('Thongbao')}}
</div>
@endif


<input id="myInput" type="text" placeholder="Search my book ..." style="width: 500px; float: right;">
<p style="padding: 40px;"></p>

<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#E0F0D9;"><b style="font-size:30px;">Bảng sách</b></div>
	<table class="table" border=2px >
		<thead>
		<tr style='background-color:#DAEDF7;'>
            <th width:20px height:200px;>Mã sách</th>
            <th width:20px height:200px;>Tên sách</th>
            <th width:20px height:200px;>Giá Bìa</th>
            <th width:20px height:200px;>Mô tả</th>
            <th width:20px height:200px;>Ảnh Bìa</th>
            <th width:20px height:200px;>Năm xuất bản</th>
            <th width:20px height:200px;>Ngày vào kho</th>
            <th width:20px height:200px;>Số lượng </th>
            <th width:20px height:200px;>Mã nhà sản xuất</th>
            <th width:20px height:200px;>Mã chủ đề</th>
            <th width:20px height:200px;>Mã tác giả</th>
            <th width:20px height:200px;>Tình trạng</th>
            <th width:20px height:200px;>Sửa thông tin</th>
            <th width:20px height:200px;>Xoá thông tin </th>
      	    </tr>
	</thead>
           @foreach($sachs as $sach)

                  
                  <tbody  id="myTable">
                        <tr>
                        <td width:20px height:200px;>
                               {{ $sach->MaSach }}
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             
                               {{$sach->TenSach }}
                              
                         </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              
                              {{ $sach->GiaBia }} 
                               
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <div style="height: 200px; overflow: auto;">
                             
                               {{ $sach->MoTa }}  
                              
                               </div>
                              </td width:20px height:200px;>
                        <td style="width:500px;">
                              <img width="300px" src="thuvien/images/sach/{{$sach->AnhBia}}?>">
                              
                              
                        </td>
                        <td width:20px height:200px;>
                             
                               {{ $sach->NamXuatBan }} 
                              
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             
                               {{ $sach->NgayVaoKho}}
                               
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              
                              {{$sach->SoLuong }}
                             
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             
                             {{ $sach->MaNXB}}
                               
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                            
                              {{$sach->MaChuDe }}
                               
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              
                               {{$sach->MaTacGia }}
                              
                              </td width:20px height:200px;>
                       
                        <td width:20px height:200px;>
                              
                              {{  $sach->TinhTrang }}
                           
                              
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             <a  class="btn btn-default" href="admin/sach/update-sach/{{$sach->MaSach }}.html">Sửa
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             <a class="btn btn-default" href="admin/sach/delete-sach/{{$sach->MaSach}}.html" onclick="confirm('Bạn có thực sự muốn xóa')" >Xoá</a>
                        </td width:20px height:200px;>
                        </tr>
                      
                             
                                @endforeach
                                 
      </tbody>
</table>
 <div class="pager" >
                    <ul>
                        <li></li>
                    </ul>
                  </div>
</div>
</body>
</html>

@endsection