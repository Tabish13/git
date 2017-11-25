<?php

namespace App\Http\Controllers\User;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  // public function product(product $product)
  // {
  //   return view('user.products',compact('product'));
  // }
  public function product()
{
    $products=Product::all();
    return view('user.products',compact('products'));

}
  // public function getAllproducts()
  // {
  //   return $products = product::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(5);
  // }
}
