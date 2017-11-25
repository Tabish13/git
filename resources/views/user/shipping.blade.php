@extends('user.layout.app')

@section('main-content')
<div class="container" style="padding:4em 0">
<div class="small-6 small-centered columns">

  <h3>Shipping Info</h3>
  <form  action="{{route('address.store')}}" method="post">
{{csrf_field()}}
{{method_field('PUT')}}
              <fieldset class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Address">
        </fieldset>
        <fieldset class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" name="city" id="city" placeholder="City">
        </fieldset>
        <fieldset class="form-group">
          <label for="state">State</label>
          <input type="text" class="form-control" name="state" id="state" placeholder="State">
        </fieldset>
        <fieldset class="form-group">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
        </fieldset>
        <fieldset class="form-group">
          <label for="country">Country</label>
          <input type="text" class="form-control" name="country" id="country" placeholder="Country">
        </fieldset>
        <fieldset class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </fieldset>
<input type="submit" class="btn btn-info" value="Proceed to Payment">
  </form>
</div>
</div>

@endsection
