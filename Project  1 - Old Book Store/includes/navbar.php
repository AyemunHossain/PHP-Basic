<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand waves-effect" href="http://localhost/php/oldbookstore/">
      <strong class="blue-text">Book Store</strong>
    </a>

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        <!-- {% if user.is_authenticated %} -->
        <li class="nav-item">
          <a class="nav-link waves-effect" href="booklist.php" target="_blank">Latest Books</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link waves-effect" href="" target="_blank">
            Your Order</a>
        </li>
      </ul>

      <!-- {% endif %} -->

      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">

        <li class="nav-item">
          <a href="https://www.facebook.com/ahashik.official" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/ahashik.me/" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>

        <!-- {% if user.is_authenticated %} -->
        <li class="nav-item">
          <a class="nav-link waves-effect" href="">
            <i class="fas fa-shopping-cart"></i>
            <span class="clearfix d-none d-sm-inline-block"> Cart </span>
          </a>
        </li>
        <!-- {% endif %} -->

        <li>
          <form class="form-inline" method="GET" action="">
            <input class="form-control mr-sm-2" name="q" placeholder="Search" value="">
          </form>
        </li>

        <!-- {% if user.is_authenticated %} -->
        <li class="nav-item pl-2 mb-2 mb-md-0">

          <a class="nav-item nav-link" href="signup.php">Sign Up</a>
        </li>
        <li class="nav-item pl-2 mb-2 mb-md-0">
          <a class="nav-item nav-link" href="login.php">Login</a>
        </li>
      </ul>

    </div>

  </div>
</nav>
<!-- Navbar -->
<div style="margin-bottom: 5rem;">

</div>