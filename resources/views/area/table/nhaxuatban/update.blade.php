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
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG NHÀ XUẤT BẢN</b></div>
       <br>
       
   <form method="post">
    @csrf
    <input type="hidden" name="MaNXB" value="{{$update_nhaxuatban->MaNXB}} ">
    <label ><b>Tên nhà xuất bản</b></label>
    <input type="text" name="TenNXB"  value="{{ $update_nhaxuatban->TenNXB}} ">
    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="DiaChi"  value='{{$update_nhaxuatban->DiaChi}}'>
    <label ><b>Điện thoại</b></label>
    <input type="number" placeholder="Điện thoại" name="DienThoai"  value='{{ $update_nhaxuatban->DienThoai}}'>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="GhiChu"  value='{{ $update_nhaxuatban->GhiChu}}'>
    <label ><b>Tình trạng</b></label>
    <br>
             <select name="TinhTrang" style="margin-top:10px;"> 
			      
          @if($update_nhaxuatban->TinhTrang== 'Có')
            <option selected='selected' value='Có'>
            {{'Có'}}
            </option>
            <option  value='Không'>
            {{"Không"}}
            </option>
          @else
            <option selected='selected' value='Không'>
            {{"Không"}}
            </option>
            <option  value='Có'>
            {{"Có"}}
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
