<?php
if(isset($_GET['kode'])){
            $sql_hapus = "DELETE FROM perawatan WHERE id_perawatan='".$_GET['kode']."'";
            $query_hapus = mysqli_query($conn, $sql_hapus);

            if ($query_hapus) {
                  $data_id = $_SESSION['id_users'];
        $date=date('Y-m-d H:i:s');
        date_default_timezone_set('Asia/Jakarta');
$aksi = "DELETE";
$tabel="Perawatan";
   $sqll_simpan = "INSERT INTO log_activity  (aksi,waktu,tabel,id_users)  VALUES (
        '".$aksi."',
         '".$date."',
           '".$tabel."',
         '".$data_id."')";
 $queryy_simpan = mysqli_query($conn, $sqll_simpan);
                 echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-per';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-per';
                    }
                })</script>";
            }
        }