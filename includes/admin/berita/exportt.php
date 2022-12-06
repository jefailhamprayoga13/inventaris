 <?php
   include '../../../config/config.php';

  $kode_jur = $_GET['kode'];
   $id = $_GET['id'];
 
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 

$nama_dokumen='berita';
ob_start();


?>  

<h2 align="center">Berita Acara Penerimaan Inventaris</h2>


<?php 
    include '../../../config/config.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris WHERE id_berita='".$id."'");
    while($d = mysqli_fetch_array($data)){
      ?> 

      <p>Pada hari ini <?php echo $d['waktu']; ?>,telah dilakukan penerimaan Inventaris oleh dan diantara: </p>
      <br>
      <p>Nama: <?php echo $d['nama_penyerah']; ?></p>
        <p>Jabatan: <?php echo $d['jabatan_penyerah']; ?></p>
        <p>Selanjutnya disebut sebagai "PIHAK PERTAMA"</p>
        <br>
        <p>dan</p>
         <p>Nama: <?php echo $d['nama_penerima']; ?></p>
        <p>Jabatan: <?php echo $d['jabatan_penerima']; ?></p>
        <p>Selanjutnya disebut sebagai "PIHAK Kedua"</p>
        <br>
         <?php 
    }
    ?>
        <p>PIHAK PERTAMA menyerahkan barang pada PIHAK KEDUA,dan PIHAK KEDUA menyatakan telah menerima barang dari PIHAK PERTAMA berupa daftar terlampir:</p>
             
             <br>                     
      <table align="center" class="table align-items-center mb-0" id="example" border="1">

                  <thead>
                    <tr align="center">
                     
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KODE INVENTARIS</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NAMA BARANG</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JUMLAH</th>
                       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KONDISI</th>
                       




                   
                    </tr>
                  </thead>
                  <tbody>
<?php 
    include '../../config/config.php';
   
    $dataa = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama,inventaris.kondisi ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris WHERE id_berita='".$id."'");
    while($di = mysqli_fetch_array($dataa)){
      ?> 
                    <tr>

                     
                      
                        </td>

                          <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $di['kode_inventaris']; ?></p>
                                 
                        </td>
                    <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $di['nama']; ?></p>
                       </td>

                         <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $di['jumlah']; ?></p>
                       </td>


                         <td align="center">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $di['kondisi']; ?></p>
                       </td>

                       

  
                    
                    </tr>
                    
                      <?php 
    }
    ?>
                  </tbody>
                </table>

<br>
                <p>Demikianlah berita acara serah terima barang ini di perbuat oleh keduabelah pihak, adapun barang-barang tersebut dalam keadaan baik dan cukup,sejak penandatanganan berita acara ini, maka barang tersebut, menjaditanggung jawab PIHAK KEDUA, memelihara / merawat dengan baik sertadipergunakan untuk keperluan(tempat dimana barang itu dibutuhkan).</p>
                <?php 
    include '../../../config/config.php';
    $id = $_GET['id'];
    $dataaa = mysqli_query($conn,"SELECT berita.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.nama ,inventaris.jumlah FROM berita INNER JOIN inventaris ON inventaris.id_inventaris = berita.id_inventaris WHERE id_berita='".$id."'");
    while($dii = mysqli_fetch_array($dataaa)){
      ?> 

   

<br>
<br>
<div class="column" style="float: left; width: 50%;">

<p align="left">Yang Menerima:</p>
<p align="left">PIHAK KEDUA</p>
<br>

<p  align="left">(<?php echo $dii['nama_penerima']; ?>)</p>
</div>

<div class="column">
<p align="right">Yang Menyerahkan,</p>
<p align="right">PIHAK PERTAMA</p>

<br>
<p align="right">(<?php echo $dii['nama_penyerah']; ?>)</p>


                   </div>

 <?php 
    }
    ?>

             <?php
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>
