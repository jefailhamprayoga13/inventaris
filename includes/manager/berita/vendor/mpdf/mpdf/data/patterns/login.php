
<?php

	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$koneksi = new mysqli("localhost","root","","inventaris");

	
	?>	

 <!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 




      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="jsonlen/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
 

</head>
<body>
	
 <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
    <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang Di Website Inventaris Barang SMKN 1 NGRUPIT</h3>
                  <p class="mb-0">Masukkan username dan password</p>
                </div>
                <div class="card-body">
				
				
				
				<form role="form" action="" method="post">
				<h3> Sistem Inventaris Barang</h3>
				<br>
					<div class="form-group">
					
					 
						<input type="text" name="username"  class="form-control" placeholder="Masukan Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Masukan Password" required autofocus />
					</div>
					<div class="form-group">
						<select name="role" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="1">Admin</option>
							<option value="2">Komite</option>
						<option value="3">Operator</option>
						</select>
					</div>
					
                     
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Masuk" />
						
					</div>


			
				</form>

				
			</div>
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
 
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="jsonlen/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>



	<?php
	
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$login = $_POST['login'];
					$level = $_POST['role'];
					
					if ($login) {
						$sql = $koneksi->query("select * from users where username='$username' and password='$password'");
						$ketemu = $sql->num_rows;
						$data = $sql->fetch_assoc();
						
						if ($ketemu >=1) {
							session_start();
							
							if ($data['id_level'] == 1 && $level == 1) {
								
								$_SESSION['username'] =$data["username"];
								$_SESSION['email'] =$data["email"];
								  $_SESSION['id_users'] =$data["id_users"];
								$_SESSION['nama'] =$data["nama"];
								header("location:includes/admin/index.php");
							}
							else if ($data['id_level'] == 2 && $level == 2) {
							
	                 $_SESSION['username'] =$data["username"];
					$_SESSION['email'] =$data["email"];
					  $_SESSION['id_users'] =$data["id_users"];
								$_SESSION['nama'] =$data["nama"];			
								header("location:includes/manager/index.php");
							}
							else if ($data['id_level'] == 3 && $level == 3) {
								
								$_SESSION['username'] =$data["username"];
								$_SESSION['email'] =$data["email"];
							   $_SESSION['id_users'] =$data["id_users"];
								$_SESSION['nama'] =$data["nama"];
								$_SESSION['kode_jurusan'] =$data["kode_jurusan"];		
								header("location:includes/operator/index.php");
							}
							
						}
						else {
							echo '<center><div class="alert alert-danger">Upss...!!! Login gagal. Silakan Coba Kembali</div></center>';
						
						}
					}
					
				?>
			