<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="admin/view.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#"><a style="color: red;">{{ session('username') }}</a></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout_admin.html" >Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin/view.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Thông tin sách</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Edit</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">More products</h6>
          <a class="dropdown-item" href="admin/tacgia/them-tac-gia.html">Thêm tác giả</a>
          <a class="dropdown-item" href="admin/nhaxuatban/them-nha-xuat-ban.html">Thêm nhà xuất bản</a>
          <a class="dropdown-item" href="admin/chude/them-chu-de.html">Thêm chủ đề</a>
          <a class="dropdown-item" href="admin/sach/them-sach.html">Thêm sách</a>
           <a class="dropdown-item" href="admin/taikhoan/them-tai-khoan.html">Thêm tài khoản</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">View products</h6>
           <a class="dropdown-item" href="admin/tacgia/view-tac-gia.html">View tác giả</a>
            <a class="dropdown-item" href="admin/nhaxuatban/view-nha-xuat-ban.html">View nhà xuất bản</a>
             <a class="dropdown-item" href="admin/chude/view-chu-de.html">View chủ đề</a>
             <a class="dropdown-item" href="admin/taikhoan/view-tai-khoan.html">View tài khoản</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/donhang/view-don-hang.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Đơn hàng</span></a>
      </li>
    
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

       
