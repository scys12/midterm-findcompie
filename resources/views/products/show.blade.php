@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container mt-5 bg-dark ">	
        <div class="card bg-secondary text-white">
            <div class="row">
                <article class="card-body p-5 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3 class="title mb-3">{{ $item->name }}</h3>
                  <p class="price-detail-wrap"> 
                      <span class="price h3 text-warning"> 
                          <span class="currency">Rp</span><span class="num">{{ $item->price }}</span>
                      </span> 
                  </p> <!-- price-detail-wrap .// -->
                  <dl class="item-property">
                      <dt>Product Description</dt>
                      <dd class=""><p>{{ $item->description }}</p></dd>
                  </dl>
                  <dl class="param param-feature">
                      <dt>Category</dt>
                      <dd>{{ $item->category->name }}</dd>
                  </dl>  <!-- item-property-hor .// -->
                  <dl class="param param-feature">
                    <dt>Seller</dt>
                    <dd>{{ $item->user->name }}</dd>
                  </dl>  <!-- item-property-hor .// -->
                  <dl class="param param-feature">
                    <dt>Location</dt>
                    <dd>{{ $item->user->location }}</dd>
                  </dl>  <!-- item-property-hor .// -->
                  <div class="d-flex">
                      @if ($item->user->id != Auth::user()->id)
                        <p style="margin-right: 5px"><a class="btn btn-primary" data-toggle="modal" data-target="#cartModal" href=""><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
                    @endif
                    <p><a class="btn btn-danger" href="javascript:history.back()">Back</a></p>
                  </div>
                </article> <!-- card-body.// -->
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <img class="card-img mt-5 ml-5" style="width:300px; height:250px;" src="{{asset('assets/'. $item->category->name.'.png')}}" alt="">
                </article>
            </div> <!-- row.// -->
        </div> <!-- card.// -->
    </div><!--container.//-->
</div>

<!-- modal add to cart -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Cart
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-image">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">
                <img src="{{asset('assets/'.$item->category->name.'.png')}}" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>              
              <td>{{$item->price}}</td>              
            </tr>
          </tbody>
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">{{$item->price}}</span></h5>
        </div>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <form action="{{route('product.buy', ['id' => $item->id])}}" method="post">
          @csrf
          <input type="hidden" name="item_id" value="{{$item->id}}">
          <input type="hidden" name="name" value="{{$item->name}}">
          <input type="hidden" name="category_id" value="{{$item->category->id}}">
          <input type="hidden" name="price" value="{{$item->price}}">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- style modal add to cart -->
<style>
.container {
  padding: 2rem 0rem;
}

.table-image {
  
  thead {
    td, th {
      border: 0;
      color: #666;
      font-size: 0.8rem;
    }
  }
  
  td, th {
    vertical-align: middle;
    text-align: center;
    
    &.qty {
      max-width: 2rem;
    }
  }
}

.price {
  margin-left: 1rem;
}

.modal-footer {
  padding-top: 0rem;
}</style>

@endsection