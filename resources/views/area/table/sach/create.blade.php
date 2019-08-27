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
    	 <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG SÁCH</b></div>
    	 <br>

          <form method="post" enctype="multipart/form-data">
          	@csrf
    
    <label ><b>Tên sách</b></label>
    <input type="text" placeholder="Tên sách" name="TenSach" required>
    
    <label ><b>GiaBia</b></label>
    <input type="number" placeholder="GiaBia" name="GiaBia" required>
    
    <label ><b>Mota</b></label>
    <textarea name="MoTa" required   id="editor1" rows="10" cols="80"></textarea>

    <label><b>Ảnh bìa</b></label>
    <input type="file" name="AnhBia" required>

    <label ><b>Năm xuất bản</b></label>
    <input type="date" placeholder="yy/mm/dd" name="NamXuatBan" required>

       <label ><b>Ngày vào kho</b></label>
    <input type="date" placeholder="yy/mm/dd" name="NgayVaoKho" required> 

    <label ><b>Số lượng</b></label>
    <input type="number" placeholder="Số lượng" name="SoLuong" required>

    <label ><b>Mã nhà xuất bản</b></label>
      
    <select name='MaNXB'>"
   @foreach($nhaxuatbans as $du_lieu)

         <option  value='{{$du_lieu->MaNXB }}'>
                 
             {{$du_lieu->TenNXB}}
                 
         </option>
    
       @endforeach 
      
     </select>

    <label ><b>Mã chủ đề</b></label>
    
    <select name='MaChuDe'>
   @foreach($chudes as $du_lieu1)
   
         <option  value='{{$du_lieu1->MaChuDe}}'>
                
             {{$du_lieu1->TenChuDe}}
                
         </option>
    
        @endforeach
        
       
     </select>

    <label ><b>Mã tác giả</b></label>

    <select name='MaTacGia'>
   @foreach($tacgias as $du_lieu2)

         <option  value='{{$du_lieu2->MaTacGia}}'>
                
            {{$du_lieu2->TenTacGia }}
                 
         </option>
        @endforeach
        
     </select>
            

    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghichu" name="GhiChu" required>

    <label ><b>Tình trạng</b></label>
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