<!DOCTYPE html>
<html en="lang">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      </head>
    <body class="container">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                <?php
                      include 'DatabaseConnection.php';
                      include 'UserAuthentication.php';

                      // Membuat objek koneksi database
                      $dbConnection = new DatabaseConnection();

                      // Membuat objek autentikasi pengguna
                      $userAuthentication = new UserAuthentication($dbConnection->conn);

                      // Mengambil data dari formulir login
                      $email = $_POST['email'];
                      $password = $_POST['password'];

                      // Memproses login
                      $userAuthentication->processLogin($email, $password);
                      ?>

                            <form method="post" action="process_login.php"><!--untuk mengatur action dari attribute PHP-->
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                  <input type="email" id="form2Example1" class="form-control" />
                                  <label class="form-label" for="form2Example1">Email address</label>
                                </div>
                              
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                  <input type="password" id="form2Example2" class="form-control" />
                                  <label class="form-label" for="form2Example2">Password</label>
                                </div>
                              
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                  <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                      <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                  </div>
                              
                                  <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                  </div>
                                </div>
                              
                                <!-- Submit button -->
                                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
                              
                                <!-- Register buttons -->
                                <div class="text-center">
                                  <p>Not a member? <a href="SignUp.php">Register</a></p>
                                  <p>or sign up with:</p>
                                  <button type="button" class="btn btn-link btn-floating mx-1" >
                                    <i class="fab fa-facebook-f">
                                        <img src="facebook.png" alt="Facebook" class="ms-2">
                                    </i>
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                    <img src="google.png" alt="Facebook" class="ms-2">
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                    <img src="twitter.png" alt="Facebook" class="ms-2">
                              
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1" >
                                    <i class="fab fa-github">
                                        <img src="github.png" alt="GitHub" class="ms-2">
                                    </i>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    </body>
</html>
