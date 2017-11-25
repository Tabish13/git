@extends('admin.layout.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('datab/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Product</h3>
        <a class='col-lg-offset-5 btn btn-success' href="{{ route('products.create') }}">Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Sr.No</th>

                          <th>Title</th>
                         <th>Sub Title</th>
                         <th>description</th>
                         <th>price</th>
                         <th>brand</th>
                         <th>Created At</th>
                         {{-- @can('products.update',Auth::user()) --}}
                         <th>Edit</th>
                         {{-- @endcan
                          @can('products.delete', Auth::user()) --}}
                         <th>Delete</th>
                         {{-- @endcan --}}
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $product)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $product->title }}</td>
                              <td>{{ $product->subtitle }}</td>
                              <td>{{ $product->description }}</td>
                              <td>{{ $product->price }}</td>
                              <td>{{ $product->brand }}</td>
                              <td>{{ $product->created_at }}</td>

                              {{-- @can('products.update',Auth::user()) --}}
                                <td><a href="{{ route('products.edit',$product->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                              {{-- @endcan

                              @can('products.delete', Auth::user()) --}}
                              <td>
                                <form id="delete-form-{{ $product->id }}" method="post" action="{{ route('products.destroy',$product->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $product->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="glyphicon glyphicon-trash"></span></a>
                              </td>
                            {{-- @endcan --}}
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Sr.No</th>
                          <th>Title</th>
                         <th>Sub Title</th>
                         <th>description</th>
                         <th>price</th>
                         <th>brand</th>
                         <th>Created At</th>
                         {{-- @can('products.update',Auth::user()) --}}
                         <th>Edit</th>
                         {{-- @endcan
                          @can('products.delete', Auth::user()) --}}
                         <th>Delete</th>
                         {{-- @endcan --}}
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

@endsection
@section('footerSection')
<script src="{{ asset('datab/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datab/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
