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
                    <img class="d-block img-fluid" style="width:1200px; height:350px"  src="/assets/1.jpg" alt="First slide">
                    
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:1200px; height:350px" src="/assets/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" style="width:1200px; height:350px" src="/assets/3.jpg" alt="Third slide">
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
                <h5 class="card-header bg-dark text-white" style="text-align : center">Category</h5>
                <div class="card-body bg-dark text-white ">
                    <div class="show-grid text-center row bg-secondary text-white pb-5">
                        <div class="col-lg-4 col-md-6 mb-4 ">
                            <br>
                            <div class="card h-100 bg-dark text-white">
                                <a href="#"><img class="card-img-top bg-dark text-white" style="width:300px; height:250px" src="/assets/ram.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">RAM</a>
                                    </h4>
                                </div>
                                <div class="card-footer bg-dark text-white">
                                    <a href="{{ url('products') }}"  class="btn btn-secondary text-white" style="width: 100%;">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <br>
                            <div class="card h-100 bg-dark text-white">
                                <a href="#"><img class="card-img-top bg-dark text-white" style="width:300px; height:250px" src="/assets/vga.png" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#" class="text-white">VGA</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ url('products') }}"  class="btn btn-secondary text-white" style="width: 100%;">See More</a>
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
                                    <a href="{{ url('products') }}"  class="btn btn-secondary text-white" style="width: 100%;">See More</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="row justify-content-center"> -->
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
                                        <a href="{{ url('products') }}"  class="btn btn-secondary text-white" style="width: 100%;">See More</a>
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
                                        <a href="{{ url('products') }}" class="btn btn-secondary text-white" style="width: 100%;">See More</a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <br>
                    <a href="{{ url('products') }}" class="btn btn-dark text-white" style="width: 100%;">See All Products</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</div>
@endsection 