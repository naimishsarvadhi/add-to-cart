<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addTocart(Request $request)
    {
        if($request->cart_id)
{
	$p_id = $request->cart_id;
	if(isset($_COOKIE['cart']))
	{
		$cart = json_decode($_COOKIE['cart']);
	}
	else
	{
		$cart = [];
	}
	if(!in_array($p_id,$cart))
	{
		array_push($cart,$p_id);
	}
	$cart_count = count($cart);
	$u_cart = json_encode($cart);

	if(setcookie('cart',$u_cart,time() + (3600),'/','','',TRUE))
	{
		setcookie('cart_count',$cart_count,time() + (3600),'/','','',TRUE);
		echo "cookie set successfull";
	}
	else
	{
		echo "false";
	}
}

    }
}
