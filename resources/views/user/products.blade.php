@extends('user.layout.app')

@section('main-content')
<div class="main">
    <div class="shop_top">

      <div class="container">

        <div class="row shop_box-top">

              @forelse($products as $product)
             <div class="col-md-3 shop_box" style="padding-top:2em;"><a href="single.html" >
          {{-- <span class="new-box">
              <span class="new-label">New</span>
            </span>
            <span class="sale-box">
            <span class="sale-label">Sale!</span>
          </span> --}}
          <div class="shop_desc">
            <img src="{{url(Storage::disk('local')->url($product->image))}}" class="img-responsive" alt="{{ $product->title}}"/>

            <h3><a href="{{route('product')}}">{{ $product->title}}</a></h3>
            <p>{{ $product->subtitle}}</p>
            {{-- <span class="reducedfrom">{{ $product->price}}</span> --}}
            <span class="actual">{{ $product->price}}</span><br>
            <ul class="buttons">
              <li class="cart"><a href="{{route('cart.store',$product->id)}}">Add To Cart</a></li>
              <li class="shop_btn"><a href="#">Read More</a></li>
              <div class="clear"> </div>
            </ul>
          </div>
        </a></div>


      @empty
        <h3>No products</h3>

      @endforelse

    </div>
  </div>
</div>
</div>
@endsection
