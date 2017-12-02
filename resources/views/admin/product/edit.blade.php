@extends('admin.layout.app')

@section('headSection')
  <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection
{{-- @section('bg-img',Storage::disk('local')->url($product->image)) --}}

@section('main-content')
  <div class="product_details col-md-6 offset-md-3">
    {{-- <header class="intro-header" style="background-image: url('@yield('bg-img')')">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

  </div>
</div>
</div>
</header> --}}
@include('includes.messages')
<form role="form" action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box-body">
    <div class="form-group">
      <label for="title">Product title</label>
      <input type="title" class="form-control" id="title" name="title" placeholder="Product title" value="{{ $product->title }}">
    </div>
    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input type="subtitle" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ $product->subtitle }}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="description" class="form-control" id="description" name="description" placeholder="Description" value="{{ $product->description }}">
    </div>
    <div class="form-group">
      <label for="brand">Brand</label>
      <input type="brand" class="form-control" id="brand" name="brand" placeholder="Brand" value="{{ $product->brand }}">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="price" class="form-control" id="price" name="price" placeholder="Price" value="{{ $product->price }}">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" id="image" name="image" >
    </div>

    <div class="form-group" style="margin-top:18px;">
      <label>Select Category</label>
      <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}"
            @foreach ($product->categories as $productCategory)
              @if ($productCategory->id == $category->id)
                selected
              @endif
            @endforeach
            >{{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>
      {{-- <div class="checkbox">
      <label>
      <input type="checkbox"> Publish
    </label>
  </div> --}}
  {{-- <img src="{{asset($product->image)}}" alt="{{$product->title}}" width="30%" width="30%"> --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>
@endsection
@section('footerSection')
  <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection
