 <?php
   include '../../../config/config.php';

  $kode_jur = $_GET['kode'];
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Laporan_Perawatan(".date('d-m-Y').").xls");


?>  

<h2 align="center" >Laporan Perawatan</h2>

<table border="1">
   
                  <thead>
                    <tr align="center">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID PERAWATAN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TANGGAL PERAWATAN</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE INVENTARIS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE JURUSAN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KONDISI</th>




                    
                    </tr>
                  </thead>
                  <tbody>
<?php 
    include '../../../config/config.php';
   
    $data = mysqli_query($conn,"SELECT perawatan.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.kondisi FROM perawatan INNER JOIN inventaris ON inventaris.id_inventaris = perawatan.id_inventaris WHERE inventaris.kode_jurusan=  $kode_jur ");
    while($d = mysqli_fetch_array($data)){
      ?> 
                    <tr>

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
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_jurusan']; ?></p>
                       </td>
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