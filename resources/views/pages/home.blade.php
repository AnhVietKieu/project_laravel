	@extends('master.master');

	@section('content')
 
		<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Featured </strong>Sách </h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                      
                              @foreach($hot_products1 as $home)
                                 <div class="gallery">
                                  <div style="position: absolute;margin-left: 190px; margin-top: 10px;border-radius:50%;color:white; padding: 10px; background-color:#831626">New</div>
                                   <a href='product-detail/{{ $home->MaLinkSach }}.html' style="text-align: center; text-decoration: none;">
                                          <img  src='thuvien/images/sach/{{ $home->AnhBia}}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;">{{ $home->TenSach}} </span><br>
                                   <span style="text-align:center; color: red">{{ number_format($home->GiaBia,0,",",".") }} vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                   @endforeach


                     <li>

                        
                              @foreach($hot_products2 as $home)
                                 <div class="gallery">
                                  <div style="position: absolute;margin-left: 190px; margin-top: 10px;border-radius:50%;color:white; padding: 10px; background-color:#831626">New</div>
                                   <a href='product-detail/{{ $home->MaLinkSach }}.html' style="text-align: center; text-decoration: none;">
                                          <img  src='thuvien/images/sach/{{ $home->AnhBia}}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;">{{ $home->TenSach}} </span><br>
                                   <span style="text-align:center; color: red">{{ number_format($home->GiaBia,0,",",".") }} vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                   @endforeach

                                   


                        </div>
                     </li>
                  </ul>
               

          
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong>Truyện Tranh</h3>
                
                  <ul id="featured">
                     <li>
                        <div class="row">



                                   @foreach($feature_products as $home)
                                 <div class="gallery">
                                  <div style="position: absolute;margin-left: 190px; margin-top: 10px;border-radius:50%;color:white; padding: 10px; background-color:#831626">New</div>
                                   <a href='product-detail/{{ $home->MaLinkSach }}.html' style="text-align: center; text-decoration: none;">
                                          <img  src='thuvien/images/sach/{{ $home->AnhBia}}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;">{{ $home->TenSach}} </span><br>
                                   <span style="text-align:center; color: red">{{ number_format($home->GiaBia,0,",",".") }} vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                   @endforeach

                           
                        </div>
                     </li>
                  </ul>
               </div>


               <div class="clearfix"></div>
            </div>
          </div>


	@endsection