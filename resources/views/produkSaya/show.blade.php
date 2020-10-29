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
                                        Jumlah barang
                                    </dd>
                                </dl>  <!-- item-property .// -->
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                    <a href="#myModal" class="btn btn-lg btn-danger text-uppercase"> Hapus </a>
                    <a href="#" class="btn btn-lg btn-warning text-uppercase">  Edit </a>
                </article> <!-- card-body.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>
<!--container.//-->

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="fa">&#xf00d;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>     

@endsection