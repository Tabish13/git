<div class="row">
  <div class="col-md-12">
    <div class="header-left">
      <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt=""/></a>
      </div>
      <div class="menu">
        <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
        <ul class="nav" id="nav">
          <li><a href="#">Home</a></li>
          <li><a href="{{ route('product')}}">Products</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
          <div class="clear"></div>
        </ul>
        <script type="text/javascript" src="js/responsive-nav.js"></script>
      </div>
      <div class="clear"></div>
    </div>
    <div class="header_right">

      <ul class="icon1 sub-icon1 profile_img">
        <span class="badge pull-right">
    {{Cart::count()}}
    </span>
            <li><a class="active-icon c1" href="{{route('cart.index')}}"> </a>
          {{-- <ul class="sub-icon1 list">
            <div class="product_control_buttons">
              <a href="#"><img src="images/edit.png" alt=""/></a>
              <a href="#"><img src="images/close_edit.png" alt=""/></a>
            </div>
            <div class="clear"></div>
            <li class="list_img"><img src="{{url(Storage::disk('local')->url($product->image))}}" alt="{{$product->image}}" width=100%/></li>
            <li class="list_desc"><h4><a href="#">{{$product->title}}</a></h4><span class="actual">
            {{$product->price}}*{{$product->qty}}</span></li>
              <div class="login_buttons">
                <div class="check_button"><a href="checkout.html">Check out</a></div>
                {{-- <div class="login_button"><a href="login.html">Login</a></div> 
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </ul> --}}
          </li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
