@extends('master.master');
@section('content')
	 @if(session('Thongbao'))
   {
            <div class="alert alert-warning alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong>Warning! {{session('Thongbao')}} </strong>
      </div>
   }
   @endif
	
	@if(count($errors)>0)
		@foreach($errors->all() as $error)

				<div class="alert alert-warning alert-dismissable" role="alert">
			  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			  <strong>Warning! {{$error}} </strong>
			</div>
	@endforeach
	@endif

<div class="clearfix"></div>
   <div class="container_fullwidth">
     <div class="container">
<form method="post">
	@csrf
<div class="form-horizontal">
 <div class="container" style="width: 50%;">
  <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading" style="margin-top: 40px;"><b>ĐĂNG NHẬP TÀI KHOẢN</b></div>
      <div class="panel-body">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Tên đăng nhập:</label>
      <div class="col-sm-7">
      <input type="text" id="username" name="Email" class="form-control" placeholder="abc" >
      	@if($errors->has('Email'))
      		<div class=" alert alert-warning">
      			<strong>{{ $errors->first('Email')}}</strong>
      		</div>
      		@endif
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Mật khẩu:</label>
      <div class="col-sm-7">
      <input type="password" id="pass" name="MatKhau" class="form-control">
      	  @if($errors->has('MatKhau'))
      		<div class=" alert alert-warning">
      			<strong>{{ $errors->first('MatKhau')}}</strong>
      		</div>
      		@endif
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4"></label>
      <div class="col-sm-6">
      <button type="submit" class="btn btn-success btn-lg">Đăng nhập</button>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</form> 
<div class="clearfix"></div>
</div>
</div>


@endsection