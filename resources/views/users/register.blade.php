@extends('master.master')
@section('content')
   @if(session('Thongbao'))
   
            <div class="alert alert-warning alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong>Warning! {{session('Thongbao')}} </strong>
      </div>
   
   @endif

	
	<div class="clearfix"></div>
<div style="margin-top: 25px;"></div>
<div class="form-horizontal" >
 <div class="container" style="width: 50%;">
  <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading" style="margin-top: 40px;"><b>ĐĂNG KÝ TÀI KHOẢN</b></div>
      <div class="panel-body">
        <form method="post">
          @csrf
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Họ và tên:</label>
      <div class="col-sm-7">
      <input type="text" id="hoten" name="HoTen" class="form-control"  placeholder="họ và tên" >
              @if($errors->has('HoTen'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('HoTen')}}</strong>
          </div>
          @endif
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Tên đăng nhập:</label>
      <div class="col-sm-7">
      <input type="text" id="username" name="name" class="form-control" placeholder="abc" >
                @if($errors->has('name'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('name')}}</strong>
          </div>
          @endif
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-7">
      <input type="text" id="email" name="Email" class="form-control">
                @if($errors->has('Email'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('Email')}}</strong>
          </div>
          @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="MatKhau">Mật khẩu:</label>
      <div class="col-sm-7">
      <input type="password" id="pass" name="password" class="form-control" >

              @if($errors->has('password'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('password')}}</strong>
          </div>
          @endif
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Ngày sinh</label>
      <div class="col-sm-7">
      <input type="date" id="ngaysinh" name="NgaySinh" class="form-control" >
                @if($errors->has('NgaySinh'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('NgaySinh')}}</strong>
          </div>
          @endif
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Giới tính:</label>
      <div class="col-sm-7">
      <select name="GioiTinh" class="form-control"> 
                    <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
            </select> 
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-3" for="email">Địa chỉ:</label>
      <div class="col-sm-7">
      <input type="text" id="diachi" name="DiaChi" class="form-control">
          @if($errors->has('DiaChi'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('DiaChi')}}</strong>
          </div>
          @endif
      </div>
    </div>

    
    

    
    <div class="form-group">
      <label class="control-label col-sm-5"></label>
      <div class="col-sm-6">
      <button type="submit"  class="btn btn-success btn-lg">Đăng ký</button>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</form>
</form> 
<div style="margin-top: 25px;"></div>

@endsection