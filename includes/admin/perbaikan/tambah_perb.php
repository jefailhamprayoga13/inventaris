<?
 $data_id = $_SESSION['id_users'];
 $kode_jur = $_SESSION['kode_jurusan'];

$kod=$_GET['kod'];
$kode=$_GET['kode'];

?>


<?php

   
    //mulai proses simpan data
      
    

 $query = mysqli_num_rows(mysqli_query($conn, "SELECT id_inventaris FROM perbaikan WHERE id_inventaris =  '".$_GET['kod']."'")); 
 if($query > 0) {
  echo "<script>alert('inventaris sudah terdaftar pada perbaikan');</script>";
 } else {
 
 
$date=date('Y-m-d');
    
        $sql_simpan = "INSERT INTO perbaikan (id_perawatan,tanggal_perbaikan,tanggal_selesai,status,id_users,id_inventaris) VALUES (
        '".$_GET['kode']."',
         '".$date."',
          '".NULL."',
           '"."1"."',
            '".$data_id."',
         '".$_GET['kod']."')";
        
        $query_simpan = mysqli_query($conn, $sql_simpan);
     

    if ($query_simpan) {
        date_default_timezone_set('Asia/Jakarta');

$data_id = $_SESSION['id_users'];
$date=date('Y-m-d H:i:s');
$aksi = "CREATE";
$tabel="Perbaikan";
   $sqll_simpan = "INSERT INTO log_activity  (aksi,waktu,tabel,id_users)  VALUES (
        '".$aksi."',
         '".$date."',
           '".$tabel."',
         '".$data_id."')";
 $queryy_simpan = mysqli_query($conn, $sqll_simpan);
         echo "<script>
                Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-perb';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-perb';
                    }
                })</script>";
              }
    }


