@extends('layouts.app')

@section('content')

<div class="container mt-5">	
    <div class="card">
        <div class="row">
            <article class="card-body p-5">    
                <div class=""><label class="labels"><b>Nama Produk</b> </label><input type="text" class="form-control" placeholder="first name" value="Nama Produknya"></div>
                <div class=""><label class="labels"><b>Harga </b> </label><input type="text" class="form-control" placeholder="first name" value="Yulia Niza"></div>
                <div class="form-group">
                    <b>Deskripsi </b>   
                    <textarea class="form-control" id="pertanyaan" name=pertanyaan rows="5" >detailnya </textarea>
                    <input hidden type="text" class="form-control" id="user_id" name=user_id value=""> 
                </div>
                    <dl class="param param-inline">
                        <dt>Kategori: </dt>
                        <dd>
                            <select class="form-control form-control-sm" style="width:150px;">
                                <option> Motherboard </option>
                                <option> RAM </option>
                                <option> Processor </option>
                                <option> Storage </option>
                                <option> VGA </option>
                            </select>
                        </dd>
                    </dl>
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