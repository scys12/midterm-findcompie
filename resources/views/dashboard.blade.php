@extends('layouts.app')
@section('content')
 <!-- Page Content -->
 <div class="bg-secondary text-white"> 
 <div class="container">
    <div class="row">
        <div class=" justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide my-4 col-lg-12" style=" margin-left: auto; margin-right: auto; width: 100%;" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img class="d-block img-fluid" style="width:1200px; height:350px"  src="https://i0.wp.com/blog.dimensidata.com/wp-content/uploads/2016/09/Daftar-Harga-Motherboard-Gaming-Terbaik-Asus-dan-Sepesifikasi-660x330.jpg" alt="First slide">
                    
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:1200px; height:350px" src="https://2.bp.blogspot.com/-gIP5q6u3M28/XNUhEDRQ4gI/AAAAAAAACqM/Z2GTwNizBtgNz6VQJGoOWtBqEy9DwZuPgCLcBGAs/s640/Prosesor-Intel-i9.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:1200px; height:350px" src="https://s4.bukalapak.com/uploads/content_attachment/e4527f9460e8d762b39b44c5/w-744/GTX_Max_Q_-_Body_1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="card-home card bg-dark text-white">
                <h5 class="card-header bg-dark text-white" style="text-align : center">Kategori</h5>
                <div class="card-body">
                    <div class="show-grid text-center row bg-dark text-white">
                        <div class="col-lg-4 col-md-6 mb-4 ">
                            <br>
                            <div class="card h-100 bg-secondary text-white">
                                <a href="#"><img class="card-img-top bg-secondary text-white" style="width:300px; height:250px" src="https://www.shwetacomputer.com/wp-content/uploads/2020/08/153665251610-800x430.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">RAM</a>
                                    </h4>
                                </div>
                                <div class="card-footer bg-secondary text-white">
                                    <a href=""  class="btn btn-dark text-white" style="width: 100%;">Lihat Lebih banyak</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                            <div class="card h-100 bg-secondary text-white">
                                <a href="#"><img class="card-img-top bg-secondary text-white" style="width:300px; height:250px" src="https://i1.wp.com/urbandigital.id/wp-content/uploads/2019/02/VGA-GAMING-TERMURAH.png?fit=768%2C380&ssl=1" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">VGA</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href=""  class="btn btn-dark text-white" style="width: 100%;">Lihat Lebih banyak</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                            <div class="card h-100 bg-secondary text-white">
                                <a href="#"><img class="card-img-top bg-secondary text-white" style="width:300px; height:250px" src="https://www.intel.co.id/content/dam/products/hero/foreground/processor-box-core-i9-x-series-1x1.png.rendition.intel.web.550.550.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">PROCESSOR</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href=""  class="btn btn-dark text-white" style="width: 100%;">Lihat Lebih banyak</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="row justify-content-center"> -->
                            <div class="col-lg-4 col-md-6 offset-md-2 mb-4">
                            <br>
                            <div class="card h-100 bg-secondary text-white">
                                <a href="#"><img class="card-img-top bg-secondary text-white"style="width:300px; height:250px"  src="https://storage-asset.msi.com/event/2020/mb/z490/images/msi-motherboards-z490-models.png" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                        <a href="#" class="text-white">MOTHERBOARD</a>
                                        </h4>
                                    </div>
                                    <div class="card-footer">
                                        <a href=""  class="btn btn-dark text-white" style="width: 100%;">Lihat Lebih banyak</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                            <br>
                            <div class="card h-100 bg-secondary text-white">
                                <a href="#"><img class="card-img-top bg-secondary text-white" style="width:300px; height:250px" src="https://www.intel.com/content/dam/products/hero/foreground/data-center-ssds-marquee-16x9.png.rendition.intel.web.320.180.png" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                        <a href="#" class="text-white">STORAGE</a>
                                        </h4>
                                    </div>
                                    <div class="card-footer">
                                        <a href="" class="btn btn-dark text-white" style="width: 100%;">Lihat Lebih banyak</a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <br>
                    <a href="" class="btn btn-secondary text-white" style="width: 100%;">Lihat Semua Produk</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</div>
@endsection 