
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Portal KSM Subang - Stikes Cirebon</title>
  </head>
  <body style="background-color: rgb(245, 250, 250)">
  <div class="content mt-0 pt-5 pb-0 mb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('assets/img/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents bg-white py-4 rounded">
          <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4 text-center">
                    <img src="{{asset('assets/img/stikes.png')}}" style="width: 120px; height:120px;"><br>
                    <span style="font-size:2rem">STIKES Cirebon</span><br> 
                    <span class="mb-4 pt-2 text-primary">Login SIPA Portal KSM Subang - STIKES Cirebon</span>
                </div>
                <form action="#" method="post">
                    <div class="form-group last">
                        <label for="username" class="px-2 text-info">NPM / NIPD</label>
                        <input type="text" class="form-control bg-white rounded px-2" style="font-size: 16px;" id="username">
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password" class="px-2 text-info">Password</label>
                        <input type="password" class="form-control bg-white rounded px-2" style="font-size: 16px;" id="password">
                    </div>
                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                        <input type="checkbox" checked="checked"/>
                        <div class="control__indicator"></div>
                        </label>
                        {{-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  --}}
                    </div>

                    <a href="/dashboard"><input type="button" value="Log In" class="btn btn-block btn-primary"></a>
                </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{asset('assets/js/login/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/login/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/login/main.js')}}"></script>
  </body>
</html>