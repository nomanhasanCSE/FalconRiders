<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcon Riders</title>
    <!-- Bootstrap cdn linked -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9bce863ca0.js" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="css/login.css">
       
</head>
<body>
    <header>
    <nav class="navbar my-4 navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand me-5"
             href="#">
            <h1>FalconRiders</h1>
          </a>
          <button class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"
               id="navbarSupportedContent">
            <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
              <li class="nav-item me-5">
                <a class="nav-link"
                   aria-current="page"
                   href="#">Home</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                   href="#">Bicycle </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                   href="#">parts </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="#">Accessories</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="login.php">Sign In</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link"
                href="signup.php">Sign Up</a>
              </li>
            </ul>
            <form role="search">
              <button class="btn btn-outline-success"
                      type="submit">Contact</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
  
  <section class="login-container mb-4">
    <form class="login-form " action="signup-db.php" method="post">
        <h2>Sign UP</h2>
        <input type="text" name="name" id="" placeholder="Enter your Name" required>
        <input type="email" name="email" id="" placeholder="Enter your e-mail" required>
        <input type="tel" name="tel" id="" placeholder="Enter your Phone Number" required>
        <input type="password" name="password" id="" placeholder="Enter your Password" required>

        <input type="submit" value="Sign Up">
    </form>
  </section>
 
<!-- Footer start -->
<footer id="about"
class="container">
<div class=" py-5 text-center">
<h1>FalconRiders</h1>
<small>Hamid Tower, Level 5, Gulshan-2, <br>
Dhaka, Bangladesh <br>
Privacy Ploicy | Terms of use</small><br>
<a href="https://web.facebook.com/AlwaysNoman/"><i class=" pe-3 fa-brands fa-facebook"></i></a>
<a href="https://twitter.com/FcNoman"><i class=" pe-3 fa-brands fa-square-twitter"></i></a>
<a href="https://github.com/NomanSpeaks"><i class=" pe-3 fa-brands fa-github"></i></a>
<a href="https://www.instagram.com/noman_on_live/"><i class=" pe-3 fa-brands fa-instagram"></i></a>
</div>

</footer>
<!-- Footer end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
</body>
</html>