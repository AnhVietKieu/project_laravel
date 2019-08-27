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
		
}
