@extends('admin.layouts.master')

<!-- manage products -->

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div id="AddProduct" class="card-header">
           <b> Manage Products </b>
              <a id="adminProductCreateButton" class="btn btn-warning"  href = "{{route('admin.product.create')}}"> Add new Product </a>
        </div>
        <div class="card-body">
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
                <td><a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-info">Edit</a></td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection