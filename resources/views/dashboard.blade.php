@extends('layouts.app')
@section('content')
 <!-- Page Content -->
 <div class="bg-secondary text-white"> 
    <br>
 <div class="container">
    <div class="row">
        <div class=" justify-content-center">
            <div class="card-home card bg-dark text-white">
                    <h4 class="card-header bg-dark text-white pl-5 ml-5" style="text-align : center">Produk Saya
                        <button class="btn btn-primary profile-button float-right">
                            <i style="font-size:20px" class=" mr-2 pt-1 fa">&#xf067;</i>Tambah Produk</button>
                    </h4>  
                <div class="card-body bg-dark text-white">
                    <div class="show-grid text-center row bg-secondary text-white">
                        @foreach ($items as $item)
                            <div class="col-lg-4 col-md-6 mb-4 ">
                                <br>
                                <div class="card h-100 bg-dark text-white m-4">
                                    <a href="#" style="padding-top: 20px"><img class="card-img-top bg-dark text-white" src="{{asset('assets/'. $item->category->name)}}" alt=""></a>
                                    <div class="card-body" style="flex: 1 1 1 !important;">
                                        <h4 class="card-title">
                                        <a href="#" style="font-weight: 700" class="text-white">{{ $item->name }}</a>
                                        </h4>
                                        <p style="font-style: italic">[{{ $item->category->name }}]</p>
                                        <p style="font-weight: 700">Rp{{ $item->price }}</p>
                                    </div>
                                    <div class="card-footer d-flex bg-dark text-white" style="justify-content: space-between; flex-direction: column">
                                        <div class="m-1">
                                            <a href="{{route('product.show', ['id'=> $item->id])}}"  class="btn btn-secondary text-white" style="width: 100%;">Lihat Detail Produk</a>
                                        </div>
                                        <div class="m-1">
                                            <a href="{{route('product.update', ['id'=> $item->id])}}"  class="btn btn-warning text-white" style="width: 100%;">Edit Produk</a>
                                        </div>
                                        <div class="m-1">
                                            <a href=""  class="btn btn-danger text-white" style="width: 100%;">Hapus Produk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                            <div class="card h-100 bg-dark text-white">
                                <a href="#"><img class="card-img-top bg-dark text-white" style="width:300px; height:250px" src="/assets/vga.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">VGA</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href=""  class="btn btn-secondary text-white" style="width: 100%;">Lihat Detail Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                            <div class="card h-100 bg-dark text-white">
                                <a href="#"><img class="card-img-top bg-dark text-white" style="width:300px; height:250px" src="/assets/processor.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">PROCESSOR</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href=""  class="btn btn-secondary text-white" style="width: 100%;">Lihat Detail Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-2 mb-4">
                        <br>
                        <div class="card h-100 bg-dark text-white">
                            <a href="#"><img class="card-img-top bg-dark text-white"style="width:300px; height:250px"  src="/assets/motherboard.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">MOTHERBOARD</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href=""  class="btn btn-secondary text-white" style="width: 100%;">Lihat Detail Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                        <div class="card h-100 bg-dark text-white">
                            <a href="#"><img class="card-img-top bg-dark text-white" style="width:300px; height:250px" src="/assets/storage.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">STORAGE</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-secondary text-white" style="width: 100%;">Lihat Detail Produk</a>
                                </div>
                            </div>
                        </div>
                        <br> --}}
                    </div>   
                    <nav aria-label="Page navigation example" class="bg-secondary text-white mt-2">
                        <ul class="pagination  justify-content-center bg-dark">
                            <li class="page-item "><a class="page-link bg-secondary text-white" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-secondary text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-secondary text-white" href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-secondary text-white" href="#">3</a></li>
                            <li class="page-item"><a class="page-link bg-secondary text-white" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</div>
@endsection 