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
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG TÀI KHOẢN</b></div>
       <br>

     <form method="post">
     @csrf
     <input type="hidden" name="MaNguoiDung" value="{{$update_taikhoan->MaNguoiDung }}">
    <label ><b>Họ tên</b></label>
    <input type="text" placeholder="Tên họ tên" name="HoTen" value='{{ $update_taikhoan->HoTen}} '>
    <label ><b>Tài khoản</b></label>
    <input type="text" placeholder="Tên tài khoản" name="name" value='{{$update_taikhoan->name}}'>
    <label ><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu" name="password" value='{{ $update_taikhoan->password}}'>
    <label ><b>Ngày sinh</b></label>
    <input type="datetime" placeholder="yy/mm/dd" name="NgaySinh" value='{{$update_taikhoan->NgaySinh}}'>
    <label ><b>Giới tính</b></label>
      <select name="GioiTinh" style="margin-top:10px;"> 
               
          @if($update_taikhoan['GioiTinh']==' Nam'){
            <option selected='selected' value='Nam'>
            {{"Nam"}}
            </option>
            <option  value='Nữ'>
            {{"Nữ"}}
            </option>
          @else
            <option selected='selected' value='Nữ'>
            {{"Nữ"}}
            </option>
            <option  value='Nam'>
           {{"Nam"}} 
            </option>
       @endif
                    </select>    
                    <br>      
    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="DiaChi" value='{{ $update_taikhoan->DiaChi}}'>
    <label ><b>Email</b></label>
    <input type="email" placeholder="Email" name="Email" value='{{$update_taikhoan->Email}}'>
    <br>
   
    <label ><b>Mã quyền hạn</b></label>
    <select name="MaQuyenHan" style="margin-top:10px;">
             
          @if($update_taikhoan->MaQuyenHan ==1){
            <option selected='selected' value='1'>
            {{"Admin"}}
            </option>
            <option  value='0'>
             {{"Người dùng"}}
            </option>
          @else
            <option selected='selected' value='0'>
            {{"Người dùng"}}
            </option>
            <option  value='1'>
            {{"Admin"}}
            </option>
          @endif
                    </select>    
                    <br>            
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="GhiChu" value='{{$update_taikhoan->GhiChu}}'>
    <label ><b>Tình trạng</b></label>
             <select name="TinhTrang" style="margin-top:10px;"> 
			        
          @if($update_taikhoan->TinhTrang =='Có'){
            <option selected='selected' value='Có'>
            {{"Có"}}
            </option>
            <option  value='Không'>
            {{ "Không"}}
            </option>
          @else
            <option selected='selected' value='Không'>
            {{"Không"}}
            </option>
            <option  value='Có'>
            {{ "Có"}}
            </option>
         @endif
                    </select>    
                    <br>         
    <button type="submit"  style="width:100px; padding: 10px; margin-top: 10px;">Cập nhập</button>
    </form>
</div>
</div>
</div>
@endsection