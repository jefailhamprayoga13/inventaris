<?php 
 
include '../../config/config.php';
 
error_reporting(0);
 
session_start();

 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $id_level = $_POST['id_level'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, nama, email, password, id_level)
                    VALUES ('$username','$nama', '$email', '$password', $id_level)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 


     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="jsonlen/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" /> 
 
   
</head>
<body>



    

<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">DAFTAR</h1>
            <p class="text-lead text-white">Isi data terlebih dahulu!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-6 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Daftar Komite</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
             
              
          
            </div>
            <div class="card-body">
              <form action=""  method="POST" class="login-email">
                   <div class="row">
                    <div class="col-md-6 col-12">
                 <div class="input-group">
                <div class="mb-3">
                  <input  class="form-control"  aria-label="Name" aria-describedby="email-addon"
                   type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                </div>
            </div>
        </div>
          <div class="col-md-6 col-12">
                 <div class="input-group">
                <div class="mb-3">
                  <input  class="form-control"  aria-label="Name" aria-describedby="email-addon"
                   type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
            </div>
        </div>
            <div class="col-md-6 col-12">
             <div class="input-group">
                <div class="mb-3">
                  <input  class="form-control"  aria-label="Email" aria-describedby="email-addon"
                   type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
            </div>
        </div>
            <div class="col-md-6 col-12">
             <div class="input-group">
                <div class="mb-3">
                  <input  class="form-control"  aria-label="Password" aria-describedby="password-addon" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
            </div>
            </div>
                <div class="col-md-6 col-12">
             <div class="input-group">
                 <div class="mb-3">
                  <input  class="form-control"  aria-label="Password" aria-describedby="password-addon" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>
            </div>
              </div>

               <div class="col-md-6 col-12">
                 <div class="input-group">
                <div class="mb-3">
                  <input  class="form-control"  aria-label="Name" aria-describedby="email-addon"
                   type="text" placeholder="Level" name="id_level" value="2" readonly="true" required>
                </div>
            </div>
        </div>
                 <div class="input-group">
                <div class="text-center">
                  <button class="btn bg-gradient-dark w-100 my-4 mb-2" name="submit">Sign up</button>
                </div>
            </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


   <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

</body>
</html>