<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class welcome extends Controller
{
		public function index()
		{
			//Cart::remove('293ad', 'Product 1', 1, 9.99, 550);
			
			$data['list']= Cart::content();

			return view('cart',$data);
		}

		public function cart()
		{
			Cart::add([
				['id' => '293ad', 'name' => 'Product 2', 'qty' => 2, 'price' => 10.00, 'weight' => 550],
				['id' => '4832k', 'name' => 'Product 3', 'qty' => 1, 'price' => 10.00, 'weight' => 550, 'options' => ['size' => 'large']]
				]);

			return view('cart');
		}
		public function login()
		{
			return view('login');
		}
		public function postlogin(Request $requests)
		{
			$arr = array(
    		'name' => $requests->name,
    		'password' => $requests->password
    		);

    	if(Auth::attempt($arr))
    	{
    		return redirect('cart');
    	}else
    	{
    		echo "that bai";
    	}
		}
}
