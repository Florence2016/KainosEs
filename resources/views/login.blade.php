<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kainos Bridge System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth login-full-bg">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="container">

                          <form class="login-form" action="{{ route('login') }}" method="POST">
                              {!! csrf_field() !!}
                              <div class="auth-form-dark text-left p-5">
                                <h2>Login</h2>
                                  <h3 class="font-weight-light">Welcome to</h3>
                                  <h4 class="font-weight-light">Kainos Bible School Management</h4>
                                  <div class="form-group">
                                    <div class="login-wrap">
                                        <p class="login-img"><i class="icon_lock_alt"></i></p>
                                        <div class="form-group">
                                            <span class="input-group-addon"><i class="icon_profile"></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                        <div class="mt-3 text-center">
                                            <a href="#" class="auth-link text-white">Forgot password?</a>
                                          </div>
                                    </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                   </div>
            </div>
          </div>
        </div>
    </form>

</div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
