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
         <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG TÀI KHOẢN</b></div>
         <br>
        <form method="post">
        	@csrf
 <label ><b>Họ tên</b></label>
    <input type="text" placeholder="Tên họ tên" name="HoTen" required="">
    <label ><b>Tài khoản</b></label>
    <input type="text" placeholder="Tên tài khoản" name="name" required="">
    <label ><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu" name="password" required="">
    <label ><b>Ngày sinh</b></label>
    <input type="datetime" placeholder="yy/mm/dd" name="NgaySinh" required="">

    <label for="gioitinh"><b>Giới tính</b></label>
      <select name="GioiTinh" style="margin-top:10px;"> 
                    <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                </select>  

    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="DiaChi" required="">
    <label ><b>Email</b></label>
    <input type="email" placeholder="Email" name="Email" required="" >
    <br>
    

   <label for="maquyenhan"><b>Mã quyền hạn</b></label>
    <select name="MaQuyenHan" style="margin-top:10px;"> 
                    <option value='1'>Admin</option>
                        <option value='0'>Người dùng</option>
                </select> 

    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="GhiChu" required="">
    
     <label for="tinhtrang"><b>Tình trạng</b></label>
             <select name="TinhTrang" style="margin-top:10px;"> 
              <option value="Có">Có</option>
                  <option value="Không">Không</option>
            </select> 
                 
    <button type="submit"  class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>

</div>
</div>
</div>
</form>
@endsection