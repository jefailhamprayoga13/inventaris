 <?php
   include '../../../config/config.php';

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Laporan_Perbaikan(".date('d-m-Y').").xls");


?>  

<h2 align="center">Laporan Perbaikan</h2>

<table border="1">
   
                 <thead>
                    <tr align="center">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID PERBAIKAN</th>

                        
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID PERAWATAN</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TANGGAL PERAWATAN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE INVENTARIS</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TANGGAL PERAWATAN</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TANGGAL SELESAI</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Users</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KONDISI</th>




                     
                    </tr>
                  </thead>
                  <tbody>
<?php 
    include '../../../config/config.php';
   
    $data = mysqli_query($conn,"SELECT perbaikan.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.kondisi ,perawatan.tanggal_perawatan FROM perbaikan INNER JOIN perawatan ON perawatan.id_perawatan = perbaikan.id_perawatan  INNER JOIN inventaris ON inventaris.id_inventaris = perbaikan.id_inventaris");
    while($d = mysqli_fetch_array($data)){
      ?> 
                    <tr>

                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['id_perbaikan']; ?></p>
                       
                      </td>
                       
                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['id_perawatan']; ?></p>
                       
                      </td>

                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['tanggal_perawatan']; ?></p>
                       
                     
                      
                        </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_inventaris']; ?></p>
                       </td>
                         </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['tanggal_perbaikan']; ?></p>
                       
                     
                      
                        </td>
                          <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['tanggal_selesai']; ?></p>
                       
                     
                      
                        </td>
 <td align="center">
  <?php
if ( $d['status'] == 1) {
 ?>
   <span class="badge badge-sm bg-gradient-danger">Belum Disetujui</span>
 <?php
}

?>

 <?php
if ( $d['status'] == 2) {
 ?>
   <span class="badge badge-sm bg-gradient-warning">Diproses</span>
 <?php
}

?>

 <?php
if ( $d['status'] == 3) {
 ?>
   <span class="badge badge-sm bg-gradient-primary">Selesai</span>
 <?php
}

?>
  
 </td>
                          <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['id_users']; ?></p>
                       
                     
                      
                        </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kondisi']; ?></p>
                       </td>

  
                    </tr>
                    
                      <?php 
    }
    ?>
                  </tbody>

                                </table>