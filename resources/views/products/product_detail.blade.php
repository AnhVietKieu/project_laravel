@extends('master.master');
@section('content')
	
	<div class="clearfix"></div>
   <div class="container_fullwidth">
   		<div class="col-sm-9" style="width: 100%;" >
		      <div class="panel panel-default">
		        <div class="panel-body">
				<!-- Hình ảnh -->			
					<div class="col-sm-6">
					<div class="panel panel-success">
						<div class="panel-heading"><b>ẢNH BÌA SÁCH</b></div>
						<div class="panel-body" style="margin-left: 150px;">
							<img src="thuvien/images/sach/{{$chitietsach->AnhBia}}"  class="img-responsive" data-toggle="modal" data-target="#AnhBiaSach" style="width:50%" alt="Image" >
							<!-- Hiệu ứng hộp hình ảnh -->

								<div class="modal fade" id="AnhBiaSach" role="dialog">
								<div class="modal-dialog ">
								<div class="modal-content">
									<div class="modal-header"> <!-- Tiêu đề -->
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Sản phẩm</h4>
									</div>
									<div class="modal-body"> <!-- Nội dung -->
										<img src="thuvien/images/sach/{{$chitietsach->AnhBia }}" class="img-responsive"  alt="Image">
									</div>
								</div>
								</div>
								</div>
						</div>
						<div class="panel-footer" data-toggle="modal" data-target="#AnhBiaSach" >Nhấn để xem hình lớn</a></div>
					</div>
					</div>
					
					<!-- Thông tin -->	
					<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading"><b>Thông tin sách</b></div>
						<div class="panel-body">
							<div style="height:30px;">Tên sách: <span style="color:green">{{$chitietsach->TenSach}}</span> </div>
							<div style="height:30px;">Tác giả: {{$chitietsach->TenTacGia}}</div>
							<div style="height:30px;">Giá bìa: <span style="color:red"> {{ $chitietsach->GiaBia }} vnd</span></div>
							<hr>
				
							<div style="height:30px;">Chủ đề: <span style="color:orange;">{{$chitietsach->TenChuDe}}</span></div>
							<div style="height:30px;">Nhà xuất bản: <span style="color:"> {{ $chitietsach->TenNXB }}</span></div>
					
							<div style="height:30px;">Năm xuất bản: <span style="color:">{{$chitietsach->NamXuatBan}}</span></div>
						
						</div>
						<!-- Giỏ hàng 	-->	
						<div class="panel-footer">
						<form>
							<input type="hidden" name="so_luong" value="1">
							<input type='hidden' name='thamso' value='gio_hang' >
							<input type='hidden' name='id' value=' $id?>'>
							<div class="input-group">
							<span class="input-group-addon">Số lượng còn lại:</span>

							<input type="text" name='' readonly style="background-color: white; width:100px;" 
							value='{{ $chitietsach->SoLuong}}'>
							<a href="shoppingcart/insert/{{$chitietsach->MaSach}}" class="btn btn-success" style="padding: 8px;">
		                       <span class="glyphicon glyphicon-shopping-cart"></span>Thêm vào giỏ hàng </a>
							
						</form>
						</div>
					</div>
					</div>
					</div>

					
					<!-- Mô tả -->	
					<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h2>GIỚI THIỆU SÁCH</h2></div>
						<div class="panel-body">
						<h3 style="color:orange"> {{$chitietsach->TenSach}}</h3>
						<div style="height:200px; overflow: scroll;"><span style="size: 15px;"> {{$chitietsach->MoTa}}</span></div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		 <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Sách : </strong><span style="text-decoration: underline;">Liên Quan </span></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">

                              @foreach($products as $home)
                                 <div class="gallery">
                                   <a href="product-detail/{{$home->MaLinkSach}}.html" style="text-align: center; text-decoration: none;">
                                          <img  src=' thuvien/images/sach/{{$home->AnhBia}}' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;"> {{$home->TenSach }}</span><br>
                                   <span style="text-align:center; color: red"> {{number_format($home->GiaBia,0,",",".")}} vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                  @endforeach


                     </li>
                     	</div>
                     </div>

		</div>
@endsection