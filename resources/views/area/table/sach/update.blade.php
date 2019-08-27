@extends('area.template.master_admin')
@section('content')

@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong>{{session('Thongbao')}}
</div>
@endif

<div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG SÁCH</b></div>
       <br>
      <form method="post" enctype="multipart/form-data">
      	@csrf

    <input type="hidden" name="MaSach" value="{{$du_lieu->MaSach}}">
    <label ><b>Tên sách</b></label>
    <input type="text" placeholder="Tên sách" name="TenSach"  value='{{$du_lieu->TenSach}}'>
    
    <label ><b>GiaBia</b></label>
    <input type="number" placeholder="GiaBia" name="GiaBia" value='{{$du_lieu->GiaBia}}'>
    
    <label ><b>Mota</b></label>
     <textarea name="MoTa" required   id="editor1" rows="10" cols="80">
       {{$du_lieu->MoTa}} 
     </textarea>
      
    
    <label><b>Ảnh bìa</b></label>
    <br>
    <img  height='80px' width='100px' src="thuvien/images/sach/{{$du_lieu->AnhBia}}">
    <input type="file" name="AnhBia" value="" >
    <label ><b>Năm xuất bản</b></label>
    <input type="date" placeholder="yy/mm/dd" name="NamXuatBan"  value='{{$du_lieu->NamXuatBan}}'>

       <label ><b>Ngày vào kho</b></label>
    <input type="date" placeholder="yy/mm/dd" name="NgayVaoKho" value='{{$du_lieu->NgayVaoKho}}' > 

    <label ><b>Số lượng</b></label>
    <input type="number" placeholder="Số lượng" name="SoLuong"  value='{{$du_lieu->SoLuong}}'>

    <label ><b>Mã nhà xuất bản</b></label>
    <select name='MaNXB'>

       @foreach($nhaxuatbans as $items)
    
                    <option @if($items->MaNXB == $du_lieu->MaNXB) selected='selected'@endif value='{{ $items->MaNXB}}'>
                        
                    {{$items->TenNXB}}
                   
                    </option>
     		
         @endforeach
    </select>
     <label ><b>Mã chủ đề</b></label>
     <select name='MaChuDe'>
   
       @foreach($chudes as $items)
    
                    <option @if($items->MaChuDe == $du_lieu->MaChuDe) selected='selected' @endif value='{{$items->MaChuDe}}'>
                        
                    {{$items->TenChuDe}} 
                 
                    </option>
     			
            @endforeach
    </select>
     <label ><b>Mã tác giả</b></label>
     <select name='MaTacGia'>
   
        @foreach($tacgias as $items)
   
        <option @if($items->MaTacGia == $du_lieu->MaTacGia) selected='selected' @endif value='{{ $items->MaTacGia}}'>
            
        {{ $items->TenTacGia}}
       
        </option>
     
    @endforeach
    
    </select>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghichu" name="GhiChu" value='{{$du_lieu['GhiChu']}}'>
    <label ><b>Tình trạng</b></label>
             <select name="TinhTrang" style="margin-top:10px;"> 
                   
          @if($du_lieu->TinhTrang ==1){
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
                    
    <button type="submit"  style="width:100px; padding: 10px; margin-top: 10px;">Cập nhập</button>
    </form>
</div>
</div>
</div>

<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'editor1' ,
        {
            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
        // tham số là biến name của textarea
</script>
@endsection