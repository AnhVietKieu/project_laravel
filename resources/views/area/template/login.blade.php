

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>
  <base href="{{ asset('')}}">

  <!-- Custom fonts for this template-->
  <link href="thuvien/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="thuvien/css/sb-admin.css" rel="stylesheet">
  <script src="http://localhost:8089/thu_vien_css/jquery/jquery.js"></script>
  <script src="http://localhost:8089/thu_vien_css/bootstrap/js/bootstrap.min.js"></script>



</head>
@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning! {{session('Thongbao')}} </strong>
</div>
@endif

<body style="background-color: #5FA2CE ;">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="background-color:orange;">Đăng nhập</div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <div class="form-label-group">

              <input type="text" id="inputEmail" class="form-control" placeholder="Email address" autofocus="autofocus" name="Email">
             <label for="inputEmail">Tên đăng nhập</label>
             @if($errors->has('Email'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('Email')}}</strong>
          </div>
          @endif
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="MatKhau">
              <label for="inputPassword">Mật khẩu</label>
               @if($errors->has('MatKhau'))
          <div class=" alert alert-warning">
            <strong>{{ $errors->first('MatKhau')}}</strong>
          </div>
          @endif
            </div>
          </div>
          <!--
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
      -->
          <button  type="submit" class="btn btn-danger btn-block">Login</button>
        </form>
      
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
