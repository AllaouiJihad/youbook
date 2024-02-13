<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/main.css')}}">  
    <title>YouBook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center text-decoration-none" >
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>You<span>B</span>ook</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="text-decoration-none" href="{{route('show')}}">Home</a></li>
          @if(session()->has('user'))
          @php
              $user = session('user');
          @endphp
      
          @if($user->id_role == 1)
              <li><a class="text-decoration-none" href="{{ route('create') }}">Add book</a></li>
              <li><a class="text-decoration-none" href="{{ route('logout') }}">Logout</a></li>

          @else
              <li><a class="text-decoration-none" href="{{ route('books.reserved') }}">Reserved Book</a></li>
              <li><a class="text-decoration-none" href="{{ route('logout') }}">Logout</a></li>
              <li>
                <a a class="text-decoration-none"   href="#route('notifications') ">
                    <div class=" d-flex align-items-center "><i class="fa-solid fa-bell me-1"></i>

                            <p class="btn btn-danger  p-0 rounded-circle m-0">{{ $reservationCount }}</p>
                    
                    </div>
                </a>
            </li>
          @endif
      
      @else
          <li><a class="text-decoration-none" href="{{ route('register') }}">Register</a></li>
          <li><a class="text-decoration-none" href="{{ route('login') }}">Login</a></li>
      @endif
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


<div class="container">
        @yield('content')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>