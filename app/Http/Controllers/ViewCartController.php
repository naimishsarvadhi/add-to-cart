<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewCartController extends Controller
{
    public function viewCart()
    {
        if(isset($_COOKIE['cart']))
        {
            $pid = json_decode($_COOKIE['cart']);
            if(is_object($pid))
            {
                $pid = get_object_vars($pid);
            }
           // $pids = implode(',',$pid);
        }else{
            $pid = [0];
        }
        $cartitem = Product::whereIn('id',$pid)->get();
        return view('view-cart', compact('cartitem'));
    }
}
