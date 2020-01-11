@extends('admin.layouts.master')

<!-- manage products -->

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div id="AddProduct" class="card-header">
           <b> Welcome to Admin Panel </b>
           <a id="adminGotoHomeButton" class="btn btn-warning"  href = "{{route('index')}}"> go to home page</a>
              <a id="adminProductCreateButton" class="btn btn-warning"  href = "{{route('admin.product.create')}}"> Add new Product </a>
        </div>
        <div class="card-body">
          @include('admin.partials.messages')
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>

            @foreach ($products as $product)
              <tr>
                <td>#</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                  <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-info">Edit</a>
                  <a href="#deleteModal{{$product->id}}" data-toggle="modal" class="btn btn-danger"> Delete</a>


                  <div class="modal fade" id="deleteModal{{$product->id}}" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body">
                          <p>Are you sure You want to delete?</p>
                        </div>
                        <div class="modal-footer">
                          <form action="{!! route('admin.product.delete', $product->id)!!}" method="post"> 
                              {{csrf_field()}}
                              <button type="submit" class="btn btn-outline-danger">Delete</button>
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                
                
                </td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection