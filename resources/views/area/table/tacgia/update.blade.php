@extends('area.template.master_admin')
@section('content')
	
  @if(session('Thongbao')){
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong>{{session('Thongbao')}}
</div>
@endif

	 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG TÁC GIẢ</b></div>
       <br>

       <form method="post">
      @csrf
    <input type="hidden" name="MaTacGia" value="{{$update_tacgia->MaTacGia}} ">
    <label ><b>Tên tác giả </b></label>
    <input type="text" placeholder="Tên tác giả" name="TenTacGia" value='{{ $update_tacgia->TenTacGia}} '>
    <label ><b>Ngày sinh</b></label>
    <input type="datetime" placeholder="ngày sinh" name="NgaySinh" value='{{$update_tacgia->NgaySinh }}'>
    <label ><b>Giới tính</b></label>
      <select name="GioiTinh" style="margin-top:10px;"> 
                                 
          @if($update_tacgia->GioiTinh == 'Nam')
				<option selected="selected" value="Nam">
           		{{'Nam'}}
           		<option>
           <option  value='Nữ'>
            {{'Nữ'}}
           	</option>
          @else
           	<option selected="selected" value="Nữ">
           {{'Nữ'}}
           	</option>
           		<option  value="Nam">
            {{'Nam'}}
					</option>
           @endif
                    </select>          
       <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="DiaChi" value='{{$update_tacgia->DiaChi}} '>  
    <label ><b>Email</b></label>
    <input type="email" placeholder="Email" name="Email" value='{{$update_tacgia->Email }}'>
     <label ><b>Tiểu sử</b></label>
    <input type="text" placeholder="tiểu sử" name="TieuSu" value='{{$update_tacgia->TieuSu}} '> 
    <label ><b>Vị trí</b></label>
    <input type="text" placeholder="tiểu sử" name="ViTri" value='{{$update_tacgia->ViTri }}'>    
    <label ><b>Tình trạng</b></label>
     <select name="TinhTrang" style="margin-top:10px;"> 
                         
          @if($update_tacgia['TinhTrang']== 'Có')
           <option selected="selected" value="Có">
            {{'Có'}}
            </option>
           <option  value="Không">
           {{'Không'}}
           </option>
          @else
          <option selected="selected" value="Không">
			{{'Không'}}
           	</option>
            <option  value="Có">
            {{'Có'}}
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