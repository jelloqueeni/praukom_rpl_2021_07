<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>

   {{-- npm bootstrap  --}}
   @Vite(['resources/sass/app.scss', 'resources/css/app.css','resources/js/app.js'])

   {{-- Bootstrap CSS --}}
   <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css')}}">


   <link rel="stylesheet" href="{{ asset('dist/css/custom.css')}}">

   {{-- google material icon --}}
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">


</head>

<body>
  <section class="vh-50" style="background-color: #eee;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col col-xl-10">
          <div class="card">
            <div class="row g-0">

              <div class="col-md-6 col-lg-6 d-none d-md-block">
                <img src="{{ asset('assets/img/cleaning.jpg')}}" style="height:660px;" alt="login form" class="img-fluid" />
              </div>

              <div class="col-md-5 col-lg-6 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <div class="text-center mb-3">
                    <img src="{{ asset('assets/img/1.png')}}" style="width:170px;" alt="logo">
                  </div>
  
                  <form action="{{route ('login')}}" method="POST">
                    @csrf

                    <div class="text-center mb-4 pb-1">
                      <span class="h3 fw-bold mb-0"> Masuk Untuk Memulai </span>
                    </div>

                    <div class="text-center mb-4 pb-1">
                      <p>Mohon isi data dengan lengkap dan benar</p>
                    </div>
            
                    <div class="form-outline mb-4">
                      <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                      placeholder="masukan username / email" autofocus name="email"/>
                      @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
  
                    <div class="form-outline mb-4">
                      <div class="password">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="masukan password"/>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    
                    <div class="p-2"> <a class="small text-muted" href="">Lupa Kata Sandi?</a></div>

                    <div class="pt-1 ">
                      <button class="btn btn-block text-white w-100" type="submit" style="background-color: #446494"> Login</button>
                    </div>

                    <div class="d-flex mb-3">
                    </div> 
                  </form>
                
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>