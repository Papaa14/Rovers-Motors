

<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <link rel="stylesheet" href="style.css">  
    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="LOGO.png" alt="">
        <span class="d-none d-lg-block">ROVERS MOTORS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="navbar">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

 
      </ul>
    </nav>
  </header>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>

          <li class="nav-item">
            <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown" style="font-weight:bold;">
              <i class="bi bi-grid" style="margin-left: 15px;"></i>
              <span>CARS</span></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

              <li><a class="dropdown-item" href="view_cars.php">available cars</a></li>
              <li><a class="dropdown-item" href="ordered_cars.php">ordered cars</a></li>
            </ul>
          </div>
          </li><br>

          <li class="nav-item">
            <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown" style="font-weight:bold;">
              <i class="bi bi-grid" style="margin-left: 15px;"></i>
              <span>TOTAL</span></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              
              <li><a class="dropdown-item" href="payment.php">payment records</a></li>
             
            </ul>
          </div>
          </li><br>

      <li class="nav-item">
         <a class="nav-link " href="view.php">
          <i class="bi bi-people-fill"></i>
           <span>Members Registered</span>

      
     

  </aside><!-- End Sidebar-->

 