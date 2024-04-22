<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 my-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/lab-07">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lab-07/admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lab-07/login.php">Login</a>
        </li>
      </ul>

      <?php
      if ($is_logged_in) { ?>
        <span>
          <?php
          echo $_SESSION['name'];
          ?>
        </span>
        <a href="logout.php" class="btn btn-warning">Logout</a>
      <?php }
      ?>
    </div>
  </div>
</nav>