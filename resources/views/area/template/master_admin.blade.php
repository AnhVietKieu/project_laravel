
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <base href="{{ asset('')}}">
  <script src="http://localhost:8089/thu_vien_css/jquery/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://localhost:8089/thu_vien_css/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://localhost:8089/thuvien/ckeditor/ckeditor.js"></script>

     <link href="http://localhost:8090/thuvien/css/style.css" rel="stylesheet">
<link href="http://localhost:8090/thuvien/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
  <link rel="stylesheet" href="http://localhost:8090/thuvien/css/flexslider.css" type="text/css" media="screen"/>
  <link href="http://localhost:8090/thuvien/css/font-awesome.min.css" rel="stylesheet">
  
 
  <style type="text/css">
     input[type=text], input[type=password], input[type=datetime], input[type=number], select,input[type=date], input[type=datetime],select,input[type=Email],textarea,input[type=file] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
  </style>

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="thuvien/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="thuvien/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="thuvien/css/sb-admin.css" rel="stylesheet">

</head>

	@include('area.template.header')
	@yield('content')
	@include('area.template.footer')
