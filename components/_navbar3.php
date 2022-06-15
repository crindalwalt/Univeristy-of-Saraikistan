<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <ul class="dflex icon-center">
      <div class="action">
        <div class="profile">
            <img src="assets/images/user.png" alt="" id="menuPic" onclick="togglemenu();">
        </div>
        <div class="menu  " id="menu">
            <h3>Shahzad Farooq<br><span>Software Engineer</span></h3>
            <ul>
                <li>
                    <img src="assets/svg/dashboard.svg" alt="dashboard">
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <img src="assets/svg/profile_avatar.svg" alt="dashboard">
                    <a href="profile.php">Profile</a>
                </li>
                <li>
                    <img src="assets/svg/notification.svg" alt="dashboard">
                    <a href="notification.php">Notification</a>
                </li>
                <hr>
                <li>
                    <img src="assets/svg/logout.svg" alt="dashboard">
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
          
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>