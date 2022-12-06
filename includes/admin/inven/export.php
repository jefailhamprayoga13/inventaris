 <?php
   include '../../../config/config.php';

  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Laporan_Inventaris(".date('d-m-Y').").xls");


?>  

<h2 align="center" >Laporan Inventaris</h2>

<table border="1">
    <tr>
                                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID INVENTARIS</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KONDISI</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KETERANGAN</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE INVENTARIS</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JUMLAH</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TANGGAL REGISTER</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TAHUN ANGGARAN</th>
                         <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DANA</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JENIS</th>
 <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JURUSAN</th>
  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RUANG</th>
   <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ROLE</th>
                    
                                         
                                        </tr>
  
 <?php 
    include '../../../config/config.php';
    $no = 1;
    $data = mysqli_query($conn,"SELECT inventaris.*,dana.nama_dana,jenis.nama_jenis,jurusan.kode_jurusan,ruang.nama_ruang,level.nama_level FROM inventaris INNER JOIN dana ON dana.id_dana = inventaris.id_dana INNER JOIN jenis ON jenis.kode_jenis = inventaris.kode_jenis INNER JOIN jurusan ON jurusan.kode_jurusan = inventaris.kode_jurusan INNER JOIN ruang ON ruang.id_ruang = inventaris.id_ruang INNER JOIN level ON level.id_level = inventaris.id_level");
    while($d = mysqli_fetch_array($data)){
      ?> 
                  
                                       <tr>

                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['id_inventaris']; ?></p>
                       
                      </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama']; ?></p>
                       
                      </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kondisi']; ?></p>
                       
                      </td>
                   <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['keterangan']; ?></p>
                       
                      </td>
                       <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_inventaris']; ?></p>
                       
                      </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['jumlah']; ?></p>
                       
                      </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['tanggal_register']; ?></p>
                       
                      </td>

  <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['tahun_anggaran']; ?></p>
                       
                      </td>

                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_dana']; ?></p>
                       
                      </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_jenis']; ?></p>
                       
                      </td>
                      <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['kode_jurusan']; ?></p>
                       
                      </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_ruang']; ?></p>
                       
                      </td>
                     <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $d['nama_level']; ?></p>
                       
                      </td>
                                        </tr>
                  <?php }?>

                                </table>