<?
 $data_id = $_SESSION['id_users'];


?>
<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
 
  </title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="../../jsonlen/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
 
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Berita</h6>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <table class="table align-items-center mb-0" id="example">

                  <thead>
                    <tr align="center">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID BERITA</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA PENYERAH</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JABATAN PENYERAH</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NAMA PENERIMA</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JABATAN PENERIMA</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">WAKTU</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE INVENTARIS</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NAMA BARANG</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JUMLAH</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE JURUSAN</th>




                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
<?php 
    include '../../config/config.php';
   
    $data = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris");
    while($d = mysqli_fetch_array($data)){
      ?> 
                    <tr>

                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['id_berita']; ?></p>
                       
                      </td>

                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_penyerah']; ?></p>
                       
                      </td>

                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['jabatan_penyerah']; ?></p>
                       
                     
                      
                        </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_penerima']; ?></p>
                       </td>
                         </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['jabatan_penerima']; ?></p>
                       
                     
                      
                        </td>
                          <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['waktu']; ?></p>
                       
                     
                      
                        </td>

                          <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_inventaris']; ?></p>
                                 
                        </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama']; ?></p>
                       </td>

                         <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['jumlah']; ?></p>
                       </td>

                        <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_jurusan']; ?></p>
                       </td>

  
                      <td class="align-middle" style="">
                         <div class="ms-auto text-end">
       


                  
                     <a href="berita/exportt.php?id=<?php echo $d['id_berita'];?> "   class="btn btn-primary px-3 mb-0" ><i class="fa fa-print"></i>Cetak</a>

                     
                        
        


                      </td>
                    </tr>
                    
                      <?php 
    }
    ?>
                  </tbody>
                </table>
 
            </div>
          </div>
        </div>
      </div>
  
    
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <script >
 $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
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
  <script async defer src="../../jsonlen/buttons.js"></script>

  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>