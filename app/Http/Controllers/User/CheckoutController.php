<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;

class CheckoutController extends Controller
{
  public function step1()
{
    if(auth::check()){
      return redirect()->route('checkout.shipping');
    }
    return redirect('login');
}
public function shipping()
{
    return view('user.shipping');
}
public function payment()
{
    return view('user.payment');
}
}
