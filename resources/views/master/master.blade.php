
	<!DOCTYPE html>
	<html>
	   <head>
	      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	      <meta name="description" content="">
	      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <link rel="shortcut icon" href="http://localhost:8090/thuvien/images/favicon.png">
	      <title>Welcome to BookStore</title>
	      <base href="{{ asset('')}}">
	      <link href="http://localhost:8090/thuvien/css/bootstrap.css" rel="stylesheet">
	      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
	      <link href="http://localhost:8090/thuvien/css/font-awesome.min.css" rel="stylesheet">
	      <link rel="stylesheet" href="http://localhost:8090/thuvien/css/flexslider.css" type="text/css" media="screen"/>
	      <link href="http://localhost:8090/thuvien/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
	      <link href="http://localhost:8090/thuvien/css/style.css" rel="stylesheet">
	      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
	      <link rel="stylesheet" type="text/css" href="http://localhost:8090/thuvien/images/products">
	      <link rel="stylesheet" type="text/css" href="js/cart.js">
	     	<link rel="stylesheet" type="text/css" href="thuvien/css/cart.css">        
	   <style type="text/css">
	       div.gallery {
	    margin:16px;
	    border: 1px solid #ccc;
	    float: left;
	    width: 250px;
	    height: 340px;
	    opacity: 1;
	    border-radius: 0px 0px 15px 15px;
	    box-shadow: 1px 1px 1px 1px #B3B5BC;
	   }

	div.gallery:hover {
	     box-shadow: 10px 10px 5px grey;
	     opacity: 0.5;
	}

	div.gallery img {
	    width: 100%;
	    height: 248px;
	}

	div.desc {
	    padding: 15px;
	    text-align: center;
	}


	   </style>
	</head>
		@include('master.header')
		@yield('content')
		@include('master.footer')

