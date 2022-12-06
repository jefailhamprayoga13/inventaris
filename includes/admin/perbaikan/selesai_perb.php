<?php
$kod=$_GET['kod'];
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM perbaikan WHERE id_perbaikan='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<?php
$date=date('Y-m-d');
    $sql_ubah = "UPDATE perbaikan SET
        tanggal_selesai='".$date."',
        status='"."3"."'
        WHERE id_perbaikan='".$_GET['kode']."';";

         $sql_ubah .= "UPDATE inventaris SET
        kondisi='"."Baik"."'
        WHERE id_inventaris='".$kod."'";
    $query_ubah = mysqli_multi_query($conn, $sql_ubah);
    mysqli_close($conn);

    if ($query_ubah) {
          echo "<script>
                Swal.fire({title: 'Perbaikan Telah Selesai',text: '',icon: 'success',confirmButtonText: 'OK'
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