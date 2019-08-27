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
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG CHỦ ĐỀ</b></div>
       <br>
      <form method="post">
      	@csrf
    <input type="hidden" name="MaChuDe" value="{{$update_chude->MaChuDe}}">
    <label ><b>Tên chủ đề</b></label>
    <input type="text" placeholder="Tên chủ đề" name="TenChuDe" value='{{ $update_chude->TenChuDe}} '>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="GhiChu" value='{{ $update_chude->GhiChu}}'>
        <label ><b>Thế loại</b></label>
    <br>
    <select name='TheLoai' style='margin-top:10px;'>
          
          @if($update_chude->TheLoai =="1"){
            <option selected='selected' value='1'>
            {{"Sách"}}
           	</option>
            <option  value='2'>
             {{"Truyện tranh"}}
            </option>
          @else
            <option selected='selected' value='2'>
            {{"Truyện tranh"}}
            </option>
            <option  value='1'>
            {{ "Sách"}}
            </option>
           @endif
                    </select>    
                    <br>      
    <label ><b>Tình trạng</b></label>
    <br>
    <select name='TinhTrang' style='margin-top:10px;'>
   
          @if($update_chude->TinhTrang =="Có"){
            <option selected='selected' value='Có'>
            {{"Có"}}
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
</form>
@endsection
