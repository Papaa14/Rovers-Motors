<?php
   
   session_start();

$conn = mysqli_connect('localhost', 'root', '', 'uwezofund');

if (!$conn) {
    
    echo "Something went wrong with database connection";
}


   $msg = "";

   if (isset($_POST['submit'])) {
   	   
   	  $LName = $_POST['loantype'];
      $LAmount = $_POST['loanamount'];
   	  $Int = $_POST['Interest'];
      $r = $_POST['repayment'];
      
   	  $l = mysqli_real_escape_string($conn, $LName);
      $a = mysqli_real_escape_string($conn, $LAmount);
   	  $i = mysqli_real_escape_string($conn, $Int);
   	  $re= mysqli_real_escape_string($conn, $r);

   	  $query = "SELECT * FROM loantypes WHERE loantype= '$l'";
   	  $result = mysqli_query($conn, $query);

   	  if (mysqli_num_rows($result) < 0) {
   	  	
   	  	$msg = "Loan Type already Exists";
   	  } else {
   	  	$insertq = "INSERT INTO loantypes(loantype, maximumloanamount, interest_rate_per_month, repayment_period) 
        VALUES('$l', '$a', '$i', '$re')";
        $insertr = mysqli_query($conn, $insertq);

   	  	if ($insertr) {
   	  		
   	  		$msg = "Loan Registered Successfully";
   	  	} else {
   	  		$msg = "Something went wrong. Try again later...";
   	  	}
   	  }
   }
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Uwezo Fund</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<body>

<?php include('./../incs/admin-sidebar.php');?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>FDeposit Registration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Fixed Deposit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FDeposit Registration</h5>
              <form class="row g-3">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Amount</label>
                  <input type="text" class="form-control" id="validationDefault01" value="" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Interest Rate</label>
                  <input type="text" class="form-control" id="validationDefault02" value="" required>
                </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>

            </div>
          </div>

        </div>

        
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Maseno</span></strong>. UWEZO FUND
    </div>
     
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>