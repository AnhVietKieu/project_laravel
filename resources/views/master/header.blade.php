   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                                       </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           
                           
                           <div class="col-md-3" style="float: right;">
                              <ul class="usermenu">
                                
                                 @if(session('username'))
                                      <li><a style="color: red;">{{session('username')}} </a></li>
                                            
                                            @else
                                            
                                         <li><a href="login.html" class="log">Đăng nhập</a></li> 
                                              
                                              @endif
                                          
                                          @if(!session('username'))
                                      <li><a href="register.html">Đăng ký</a></li>
                                    
                                    @endif

                                    @if(session('username'))
                                      <li><a href="logout.html" class="reg">Đăng suất</a></li>
                                    @endif
                              </ul>
                           </div>
                        </div>
                     </div>
                    
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="index.html" class="dropdown-toggle">Trang chủ</a>
                  
                              </li>
                              <li><a href="product-book">Sách</a></li>
                              <li><a href="product-story">Truyện tranh</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                 <div class="dropdown-menu mega-menu">

                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             
                                             @foreach($menubooks as $menubook)
                                                 <li><a href="category/{{ $menubook->MaLinkChuDe}}.html">{{$menubook->TenChuDe}}</a></li>
                                                 @endforeach

                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                            
                                             @foreach($menustorys as $menustory)
                                                 <li><a href="category/{{ $menustory->MaLinkChuDe}}.html">{{$menustory->TenChuDe }} </a></li>
                                                 @endforeach

                                          </ul>
                                       </div>
                                    </div>
                              
                                 </div>
                              </li>
                              <li><a href="contact.html">Liên lạc</a></li>

                              <li>
                                  <div >
                                  <form action="search" method="get">
                                    
                                   <div class="form-group">
                                       <input type="hidden"  value="" >
                                            <input type="text" class="form-control" size="20" placeholder="Search" name="timkiem" value="" required="">
                                    
                                  </div>
                                     </form>
                                    
                                </div>   
                              </li>
                              <li >
                              <a href="giohang.html" class="cart-icon">Giỏ hàng <span class="cart_no"></span></a>
                              <ul class="option-cart-item">
                                 <li>
                           </ul>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         


