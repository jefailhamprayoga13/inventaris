<?php
if(isset($_GET['kode'])){
            $sql_hapus = "DELETE FROM users WHERE id_users='".$_GET['kode']."'";
            $query_hapus = mysqli_query($conn, $sql_hapus);

            if ($query_hapus) {
                 echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-users';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-users';
                    }
                })</script>";
            }
        }