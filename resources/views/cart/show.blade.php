@extends('layouts.app')

@section('content')

<div class="container mt-5">	
    <div class="card">
        <div class="row">
                <article class="card-body p-5">
                    <h3 class="title mb-3">Nama Produk</h3>
                    <p class="price-detail-wrap"> 
                        <span class="price h3 text-warning"> 
                            <span class="currency">Rp</span><span class="num">1.299.000</span>
                        </span> 
                        <span>/per kg</span> 
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Deskripsi Produk</dt>
                        <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
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
                        <a href="#" class="btn btn-lg btn-primary text-uppercase"> Simpan </a>
                    <a href="#" class="btn btn-lg btn-danger text-uppercase">  Batalkan </a>
                </article> <!-- card-body.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>
<!--container.//-->

@endsection