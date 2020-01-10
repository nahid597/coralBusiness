
<form class="form-inline" action="{{route('carts.store')}}" method="post">
   @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">
   <button type="submit" class="btn btn-outline-success"> <i class="fa fa-plus"></i> Add to Cart <i class="fa fa-minus"></i></button>
</form>