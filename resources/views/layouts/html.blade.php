<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    

    <title>SEBELAS MUDA FC</title>
    <link rel="icon" href="assets/img/logofc.png">
    <style>
      
    </style>
  </head>
  <body>
    <div>
     
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="">
              <img src="assets/img/logofc.png" alt="" style="width: 70px; height: 70px;">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="container">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                  <a class="nav-link js-scroll-trigger text-warning p-3" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link js-scroll-trigger text-warning p-3" href="{{ url('/gallery') }}">Gallery</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link js-scroll-trigger dropdown-toggle text-warning p-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item text-warning" href="{{ url('/timA') }}">Tim A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-warning" href="{{ url('/timB') }}">Tim B</a>
                  </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link js-scroll-trigger disabled text-warning p-3" href="{{ url('/home') }}">kontak</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger dropdown-toggle text-warning p-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Club
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-warning" href="">Informasi Club</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-warning" href="#">Sejarah</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-warning" href="#">Pelatih & Official</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-warning" href="#">Daftar Pemain</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-warning" href="#">Sponsor</a>
                    </div>
                    </li>
                    
              </ul>
              <img src="assets/img/bola.png" alt="" style="width: 40px; height: 40px;">
              <marquee behavior="" direction="right"><h2 class="text-warning">SEBELAS MUDA FC</h2></marquee>
              <img src="assets/img/bola.png" alt="" style="width: 40px; height: 40px;">
              
              </div>
          </div>
        </nav>
       
    </div>

<div>
   @yield('content')
</div>
   

    
      
      
      
    
   

    @include('layouts.footer')
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>