<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YOUBOOK</title>
  <link rel="stylesheet" href="{{asset('asset/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                
                <p class="text-center">SIGN UP </p>
                <form method="post" action="{{route('registerAction')}}">
                    @csrf
                  <div class="mb-3">
                   
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="{{ old('name') }}" aria-describedby="emailHelp">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input type="email" name="email" class="form-control"  value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password"  value="{{ old('password') }}" class="form-control" id="exampleInputPassword1">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign UP</button>
                  <div class="d-flex align-items-center justify-content-center">
                
                    <a class="text-primary fw-bold ms-2" href="{{route('loginAction')}}">Login </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>