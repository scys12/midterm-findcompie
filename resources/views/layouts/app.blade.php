<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Elviza Computer</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <a class="navbar-brand-light ml-5 h1" style="color: white" href="{{ url('/') }}">Elviza</a>
        <div class="collapse navbar-collapse ml-1 h5 mt-3" style="color: white" id="navbarSupportedContent">
            Computer
        </div>
        <div class="nav-item navbar-right mr-2">
            <form method="GET" action="{{route('products.search')}}" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Product Name" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <i  style="font-size:24px; color:white" class="fa">&#xf07a;</i>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('products') }}">RAM</a>
                <a class="dropdown-item" href="{{ url('products') }}">VGA</a>
                <a class="dropdown-item" href="{{ url('products') }}">Processor</a>
                <a class="dropdown-item" href="{{ url('products') }}">Motherboard</a>
                <a class="dropdown-item" href="{{ url('products') }}">Storage</a>
            </div>
        </div>
        <a href="{{ route('products') }}" style="color: white" class="nav-link"> Products </a>
        @guest
            @if (Route::has('login'))
                <div class="nav-item">
                    <a class="nav-link" style="color: white" href="{{ route('login') }}">Login</a>
                </div>
                @if (Route::has('register'))
                    <div class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link" style="color: white">Register</a>
                    </div>
                @endif            
            @endif        
        @endguest
        @auth
            <div class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle"  style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->username}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                    <a class="dropdown-item" href=" {{ route('dashboard') }} ">My Store</a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a style="color: black;padding: .25rem 1.5rem;" class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            </div>
        @endauth
    </nav> 
<br>
<br>
@yield('content')
  <!-- /.container -->

  <!-- Footer -->
<footer class="py-2 mt -2 bg-dark text-center  ">
    <p class=" text-center text-white"> Follow Us :</p>
    <div class="template-demo" style="align-center"> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-facebook btn-ro mr-2 "><i class="fa fa-facebook"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-youtube btn-ro mr-2"><i class="fa fa-youtube"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-twitter btn-ro mr-2"><i class="fa fa-twitter"></i></button> 
        <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-instagram btn-ro mr-2"><i class="fa fa-instagram"></i></button> 
    </div>
    <br>
    <p class=" text-center text-white">Copyright &copy; Elviza Computer 2020</p>
</footer>

</body>
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }
    .modal-confirm {		
        color: #636363;
        width: 400px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }
    .modal-confirm .modal-header {
        border-bottom: none;   
        position: relative;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }
    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }
    .modal-confirm .modal-body {
        color: #999;
    }
    .modal-confirm .modal-footer {
        border: none;
        text-align: center;		
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }
    .modal-confirm .modal-footer a {
        color: #999;
    }		
    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }
    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }
    .modal-confirm .btn, .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }
    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }
    .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

</html>
