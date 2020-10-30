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
                        <dt>Deskripsi Produk</dt>
                        <dd class=""><p>{{ $item->description }}</p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Kategori</dt>
                        <dd>{{ $item->category->name }}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <a href="javascript:history.back()" class="btn btn-lg btn-danger text-uppercase">  Back </a>                    
                </article> <!-- card-body.// -->
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="#"><img class="card-img mt-5 ml-5" style="width:300px; height:250px;" src="https://www.intel.co.id/content/dam/products/hero/foreground/processor-box-core-i9-x-series-1x1.png.rendition.intel.web.550.550.png" alt=""></a>
                </article>
            </div> <!-- row.// -->
        </div> <!-- card.// -->
    </div>
</div>
<!--container.//-->
@endsection