@extends('area.template.master_admin')
@section('content')

@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> {{session('Thongbao')}}
</div>
@endif


 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
         <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG TÁC GIẢ</b></div>
         <br>
 <form method="post">
 	@csrf
    <label for="tentacgia"><b>Tên tác giả</b></label>
    <input type="text" placeholder="Tên họ tên" name="TenTacGia" >
    <label for="ngaysinh"><b>Ngày sinh</b></label>
    <br>
    <input type="date" placeholder="yy/mm/dd" name="NgaySinh" >
    <br>
    <label for="gioitinh"><b>Giới tính</b></label>
    <br>
      <select name="GioiTinh" style="margin-top:10px;"> 
                    <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                </select> 
                <br>   
    <label for="diachi"><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="DiaChi" >
    <label for="email"><b>Email</b></label>
    <input type="Email" placeholder="Email" name="Email" >
     <label for="tieusu"><b>Tiểu sử</b></label>
     <input type="text" name="TieuSu" placeholder="Tiểu sử" id="editor1">
    <label for="vitri"><b>Vị trí</b></label>
    <input type="text" placeholder="Tên vị trí" name="Vitri" >
    <label for="tinhtrang"><b>Tình trạng</b></label>
    <br>
             <select name="TinhTrang" style="margin-top:10px;"> 
			        <option value="Có">Có</option>
			            <option value="Không">Không</option>
		        </select>    
		        <br>    
   <button type="submit"  class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>

</div>
</div>
</div>
</form>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'editor1' );// tham số là biến name của textarea
</script>
@endsection