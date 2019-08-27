@extends('master.master')
@section('content');
<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">

<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Search </strong> Book:<span style="text-decoration: underline; color: red;"> {{$title}}</span></h3>
                
                  <ul id="featured">
                     <li>
                        <div class="row">


                              <p style="font-size: 20px;font-weight: inherit; color: red;"></p>



                           @foreach($searchs as $homes)
                                 <div class="gallery">
                                   <a href='product-detail/{{$homes->MaLinkSach }}.html' style="text-align: center; text-decoration: none;">
                                          <img  src='thuvien/images/sach/{{ $homes->AnhBia}}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;">{{$homes->TenSach }}</span><br>
                                   <span style="text-align:center; color: red">{{number_format($homes->GiaBia,0,",",".")}}  vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                  @endforeach

                           
                        </div>
                     </li>
                  </ul>
               </div>
          </div>
    </div>

    @endsection