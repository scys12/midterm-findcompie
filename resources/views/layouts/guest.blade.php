<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Elviza Computer</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <a class="navbar-brand-light ml-5 h1" style="color: white" href="">Elviza</a>
        <div class="collapse navbar-collapse ml-1 h5 mt-3" style="color: white" id="navbarSupportedContent">
            Computer
        </div>
        <div class="nav-item navbar-right mr-2">
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <i  style="font-size:24px; color:white" class="fa">&#xf07a;</i>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">RAM</a>
                <a class="dropdown-item" href="#">VGA</a>
                <a class="dropdown-item" href="#">Processor</a>
                <a class="dropdown-item" href="#">Motherboard</a>
                <a class="dropdown-item" href="#">Storage</a>
            </div>
        </div>
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
    </nav> 
<br>
<br>
<br>
{{ $slot }}
 
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
      <p class=" text-center text-white">Copyright &copy; Elviza Electronic 2020</p>
    <!-- /.container -->
  </footer>

</body>

</html>
