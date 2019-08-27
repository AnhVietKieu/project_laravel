@extends('master.master')
@section('content')

@if(session('Thongbao'))
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong>{{session('Thongbao')}}
</div>
@endif
		<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
            	<div class="panel panel-success">
				    <div class="panel-heading"><h2>GIỎ HÀNG</h2></div>
				    <div class="panel-body">
				    	@if($list != null)
				<table class="table">
				   	<thead style="font-weight:bold; font-size: 20px;">
				       	<tr>
				           	<th>Sản phẩm</th>
				           	<th>Số lượng </th>
				           	<th>Giá</th>
				           	<th>Tổng</th>
				           	<th>Xoá</th>
				       	</tr>
				   	</thead>

				   	<tbody>
				   		
				   		@foreach($list as $row)

				       		<tr>
				           		<td>
				               		<p><strong>{{$row->name}}</strong></p>
				               		<p>{{($row->options->has('size') ? $row->options->size : '')}}</p>
				               		<p><img src="thuvien/images/sach.{{$row->size}}"></p>
				           		</td>
				           		<td>
				           			<a class="btn btn-warning" href="shoppingcart/update-giam/{{$row->rowId}}">-</a>
				           			<input type="number" value="{{$row->qty}}" disabled>
				           			<a class="btn btn-warning" href="shoppingcart/update-tang/{{$row->rowId}}">+</a>
				           		</td>
				           		<td>${{$row->price}}</td>
				             
				           		<td>${{$row->subtotal}}</td>
				           		<td><a class="btn btn-danger" href="shoppingcart/delete/{{$row->rowId}}">X</a></td>
				       		</tr>

					   	@endforeach

				   	</tbody>
				   	
				   
				</table>
				<div >
        
					<h4>Tổng tiền chưa thuế: {{Cart::initial()}} Đồng</h4>
			        <h4>Thuế giá: {{Cart::tax()}} Đồng</h4>
			        <h4>Tổng số tiền : {{Cart::total()}}</h4>
			        <!--
			      // <a class="btn btn-danger" href="shoppingcart/thanhtoan.html"> <h4>Thanh toan</h4></a>
			  -->

    </div>
			</div>
		</div>
	</div>
@endif
	
		  <div class="clearfix"></div>
            </div>
          </div>
@endsection