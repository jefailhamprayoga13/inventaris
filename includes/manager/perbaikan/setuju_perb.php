<?php
$data_id = $_SESSION['id_users'];
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM perbaikan WHERE id_perbaikan='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<?php
    $sql_ubah = "UPDATE perbaikan SET
        status='"."2"."'
        WHERE id_perbaikan='".$_GET['kode']."'";
    $query_ubah = mysqli_query($conn, $sql_ubah);
   

    if ($query_ubah) {

         date_default_timezone_set('Asia/Jakarta');

$data_id = $_SESSION['id_users'];
$date=date('Y-m-d H:i:s');
$aksi = "MENYETUJUI";
$tabel="Perbaikan";
   $sqll_simpan = "INSERT INTO log_activity  (aksi,waktu,tabel,id_users)  VALUES (
        '".$aksi."',
         '".$date."',
           '".$tabel."',
         '".$data_id."')";
 $queryy_simpan = mysqli_query($conn, $sqll_simpan);
          echo "<script>
                Swal.fire({title: 'Perbaikan Telah Disetujui',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-perb';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Edit Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-perb';
                    }
                })</script>";
    }
?>