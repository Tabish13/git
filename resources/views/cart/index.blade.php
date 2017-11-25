@extends('user.layout.app')

@section('main-content')
  <div class="container" style="padding:4em 0">
    <div class="row ">
      <h3>Cart Items</h3>

      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cartItems as $cartItem)
            <tr>
              <td>{{$cartItem->name}}</td>
              <td>{{$cartItem->price}}</td>
              <td width="30px">

                <form class="" action="{{route('cart.update',$cartItem->rowId)}}" method="post">
                  {{csrf_field()}}
                  {{ method_field('PATCH') }}
                  <input type="text" name="qty" value="{{$cartItem->qty}}">

                </td>

                <td>  <input style="float:left" type="submit" class="btn btn-sm btn-default" name="" value="OK">
                </form>

                <form class="" action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <input type="submit" name="" value="Delete" class="btn btn-sm btn-danger">
                </form>
              </td>
            </tr>

          @endforeach
          <tr>
            <td></td>
            <td>
              Tax : ${{Cart::tax()}} <br>
              Sub Total : ${{Cart::subtotal()}} <br>
              Grand Total : ${{Cart::total()}}</td>
              <td>Items : {{Cart::count()}}</td>
            </tr>
            <td></td>
            <td></td>
          </tbody>
        </table>
        <a href="{{route('checkout.shipping')}}" class="btn btn-info">Checkout</a>
      </div>
</div>
    @endsection
