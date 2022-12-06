   <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               <?php echo $data_user; ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                  <?php echo $data_nama; ?> /   <?php echo $data_email; ?>
              </p>
            </div>
          </div>
      
        </div>
      </div>
    </div>

    

  

 <div class="container-fluid py-4">
      <div class="row">
        <?php 
    include '../../config/config.php';
   
    $datau = mysqli_query($conn,"SELECT * FROM users ");
    $jumlah_users = mysqli_num_rows($datau)
      ?> 
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold ">Users</p>
                    <h5 class="font-weight-bolder mb-0">
                     <?php echo  $jumlah_users; ?>
                     
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php 
    include '../../config/config.php';
   
    $dataaaa = mysqli_query($conn,"SELECT * FROM Inventaris ");
    $jumlah_inv = mysqli_num_rows($dataaaa)
      ?> 
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Inventaris</p>
                    <h5 class="font-weight-bolder mb-0">
                       <?php echo  $jumlah_inv; ?>
                     
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-building text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php 
    include '../../config/config.php';
   
    $dataaa = mysqli_query($conn,"SELECT * FROM perbaikan ");
    $jumlah_perb = mysqli_num_rows($dataaa)
      ?> 
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Perbaikan</p>
                    <h5 class="font-weight-bolder mb-0">
                   <?php echo  $jumlah_perb; ?>
                    
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-settings text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php 
    include '../../config/config.php';
   
    $dataa = mysqli_query($conn,"SELECT * FROM perawatan ");
    $jumlah_per = mysqli_num_rows($dataa)
      ?> 
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Perawatan</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php echo  $jumlah_per; ?>
                    
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-single-copy-04 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<?php 

  $sql_cek = "SELECT * FROM users ";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        if ($data_cek['id_level'] == 3) {
        
  ?>


         <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Berita Terbaru</h6>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <table class="table align-items-center mb-0" id="">

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




                     
                    </tr>
                  </thead>
                  <tbody>
<?php 

 

    include '../../config/config.php';
   
    $data = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris WHERE inventaris.kode_jurusan=  $kode_jur  ORDER BY id_berita DESC LIMIT 5");
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
  <?php 
    }
    else {


  
    ?>
      <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Berita Terbaru</h6>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <table class="table align-items-center mb-0" id="">

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




                     
                    </tr>
                  </thead>
                  <tbody>
<?php 

 

    include '../../config/config.php';
   
    $data = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris ORDER BY id_berita DESC LIMIT 5");
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

       <?php 
    }
  
    ?>
    </div>


      </div>



    <script >
 $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>