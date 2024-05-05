<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Uwezo Fund Management</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

    <nav class="header-nav ms-auto">
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
              <span>Loans</span></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

              <li><a class="dropdown-item" href="view_loans.php">Requested</a></li>
              <li><a class="dropdown-item" href="loan_repayment.php">Repayment</a></li>
            </ul>
          </div>
          </li><br>

          <li class="nav-item">
            <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown" style="font-weight:bold;">
              <i class="bi bi-wallet-fill" style="margin-left: 15px;"></i>
              <span>Totals</span></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              
              <li><a class="dropdown-item" href="frequent.php">Frequent Contributions</a></li>
              <li><a class="dropdown-item" href="view_savings.php">savings</a></li>
              <li><a class="dropdown-item" href="view_fdeposit.php">Fixed deposit</a></li>
            </ul>
          </div>
          </li><br>

      <li class="nav-item">
         <a class="nav-link " href="view.php">
          <i class="bi bi-people-fill"></i>
           <span>Members Registered</span>

      <li class="nav-item">
         <a class="nav-link " href="user_logs.php">
          <i class="bi bi-people-fill"></i>
           <span>User Logs</span>
      
      <li class="nav-item">
        <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown" style="font-weight:bold;">
          <i class="bi bi-grid" style="margin-left: 15px;"></i>
          <span>Registrations</span></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

          <li><a class="dropdown-item" href="loan_registration.php">Loans</a></li>
          <li><a class="dropdown-item" href="fdeposit_registration.php">Fixed deposits</a></li>
        </ul>
      </div>
      </li><br>

     <li class="nav-item">
         <a class="nav-link " href="update.php">
          <i class="bi bi-list"></i>
           <span>Updates</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

 