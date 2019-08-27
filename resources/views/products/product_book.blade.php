@extends('master.master');
@section('content')
	

      <div class="clearfix"></div>
      <div class="container_fullwidth">
        <div class="container">

          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                                                
                <h3 class="title" style="color: red;">
                  Sách
                </h3>
                <ul>
                   @foreach($menubooks as $menubook)
                         <li><a href="category/{{ $menubook->MaLinkChuDe }}.html">{{ $menubook->TenChuDe }}</a></li>
                      @endforeach


                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="branch leftbar">
                <h3 class="title" style="color: red;">
                  Truyện tranh
                  </h3>
                <ul>
                    
                   @foreach($menustorys as $menustory)
                       <li><a href="category/ {{ $menustory->MaLinkChuDe }} .html">{{$menustory->TenChuDe }}</a></li>
                       @endforeach

                </ul>
              </div>
              <div class="clearfix">
              </div>
              <!--
              <div class="price-filter leftbar">
                <h3 class="title">
                  Price
                </h3>
                <form class="pricing">
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div>
              <div class="clearfix">
              </div>
              
              -->
             
            </div>
            <div class="col-md-9">
              
              <div class="clearfix">
              </div>
              <div class="products-grid">
             
                <div class="pager" id="country_table">
                    <ul>
                        <li>{!! $feature_products->links() !!}</li>
                    </ul>
                  </div>
                 
                <div class="clearfix">
                </div>
                <div class="row" id="country_table">

                  
                  @foreach($feature_products as $homes)
                                 <div class="gallery">
                                   <a href='product-detail/{{ $homes->MaLinkSach }}.html' style="text-align: center; text-decoration: none;">
                                          <img  src='thuvien/images/sach/{{ $homes->AnhBia }}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;">{{$homes->TenSach }}</span><br>
                                   <span style="text-align:center; color: red">{{ number_format($homes->GiaBia,0,",",".") }}  vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                   @endforeach

                 

                </div>

                <div class="clearfix">
                </div>
               
              </div>
            </div>
          </div>
           <div class="pager" id="country_table">
                    <ul>
                        <li>{!! $feature_products->links() !!}</li>
                    </ul>
                  </div>

                   <div class="clearfix"></div>
              
               </div></div></div></div></div></div></div>
@endsection