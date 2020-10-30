@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container mt-5 bg-dark ">	
        <div class="card bg-secondary text-white">
            <div class="row">
                <article class="card-body p-5 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="title mb-3">Nama Produk</h3>
                    <p class="price-detail-wrap"> 
                        <span class="price h3 text-warning"> 
                            <span class="currency">Rp</span><span class="num">1.299.000</span>
                        </span> 
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Deskripsi Produk</dt>
                        <dd class=""><p>Here goes description consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco </p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Kategori</dt>
                        <dd>Kategori Barang</dd>
                    </dl>  <!-- item-property-hor .// -->
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="param param-inline">
                                    <dt>Jumlah: </dt>
                                    <dd>
                                <select class="form-control form-control-sm" style="width:70px;">
                                    <option> 1 </option>
                                    <option> 2 </option>
                                    <option> 3 </option>
                                </select>
                            </dd>
                                    </dl>  <!-- item-property .// -->
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                        <p><a class="btn btn-primary" data-toggle="modal" data-target="#cartModal" href=""><i class="fa fa-shopping-cart"></i> Beli Sekarang</a></p>
                </article> <!-- card-body.// -->
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="#"><img class="card-img mt-5 ml-5" style="width:300px; height:250px;" src="https://www.intel.co.id/content/dam/products/hero/foreground/processor-box-core-i9-x-series-1x1.png.rendition.intel.web.550.550.png" alt=""></a>
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
          Keranjang Belanja
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
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">
                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>Vans Sk8-Hi MTE Shoes</td>
              <td>1700000</td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="2"></td>
              <td>Rp. 1700000</td>
            </tr>
          </tbody>
        </table> 
        <div class="d-flex justify-content-end">
          <h5>Total: <span class="price text-success">Rp. 1700000</span></h5>
        </div>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Checkout</button>
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