@extends('admin.layout.app')

@section('main-content')
  <div class=" col-md-6 offset-md-3">
    @include('includes.messages')
    <form role="form" class="" action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="category_name">Category Name</label>
          <input type="category_name" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

  </div>
@endsection
