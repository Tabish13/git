<?php

namespace App\Http\Controllers;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
  public function store(Request $request)
  {
// dd($request->all());
    $this->validate($request,[
      'address'=>'required',
      'city'=>'required',
      'state'=>'required',
      'zip'=>'required|integer',
      'phone'=>'required',
    ]);

    Auth::user()->address()->create($request->all());
    return redirect()->route('storePayment');

  }
}
