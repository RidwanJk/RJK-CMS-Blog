<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>R J B | Login</title>
  <link rel="stylesheet" href="./assets/css/main.min.css">
  <link rel="shortcut icon" href="./assets/img/LOGO BULAT.png">
  <meta name="theme-color" content="#008080">
  <style>
    .bd-login-form {
      min-height: 100vh;
      flex: 4;
      display: flex;
      align-items: center;
      background-position: center;
      background-size: cover;
    }

    .bd-login-cover {
      min-height: 100vh;
      flex: 3;
      background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)), url(./assets/img/bg3.jpg);
      background-size: cover;
      background-position: center;
    }
  </style>
</head>

<body style="background-color: var(--bs-gray-900);">
  <div class="bd-login-layout d-block d-lg-flex bg-light">
    <section class="bd-login-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <form action="p_login.php" method="post">
                  <h3 class="text-center">Welcome Back!</h3>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                  <p class="text-center">Or</p>
                  <p class="text-center m-0">Don't have an account? <a href="./register.php">Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>