<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
  public function payment(Request $request)
  {
    Log::info($request->all());
    return "text";
    //dd($request->all());
  }
}
