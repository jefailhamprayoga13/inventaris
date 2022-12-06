<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM perawatan WHERE id_perawatan='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data</h3>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">

          <input type='hidden' class="form-control" name="id_perawatan" value="<?php echo $data_cek['id_perawatan']; ?>"
             readonly/>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Perawatan</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="nip" name="tanggal_perawatan" value="<?php echo $data_cek['tanggal_perawatan']; ?>" required>
                </div>
            </div>

             <div class="form-group row">
        <label class="col-sm-2 col-form-label">Inventaris</label>
        <div class="col-sm-5">
        <?php

$sql1 = " SELECT * FROM inventaris ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='id_inventaris'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["id_inventaris"] . "'>" . $row["kode_inventaris"] . " - " . $row["nama"] ."</option>";
}
echo "</select>";
?>
        </div>
      </div>


           
        <div class="card-footer">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal12">
             <button type="submit"  class="btn btn-primary" >Simpan</button>
            </a>
            <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah data yang anda isi sudah benar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        
        <button type="submit" name="Ubah" value="Ubah" class="btn btn-primary">Ya</button>

      </div>
    </div>
  </div>
</div>
            <a href="?page=data-per" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){  
    $sql_ubah = "UPDATE perawatan SET
    
        tanggal_perawatan='".$_POST['tanggal_perawatan']."',
        id_inventaris='".$_POST['id_inventaris']."'
        WHERE id_perawatan='".$_POST['id_perawatan']."'";
    $query_ubah = mysqli_query($conn, $sql_ubah);
   

    if ($query_ubah) {
       $data_id = $_SESSION['id_users'];
     date_default_timezone_set('Asia/Jakarta');
        $date=date('Y-m-d H:i:s');
$aksi = "UPDATE";
$tabel="Perawatan";
   $sqll_simpan = "INSERT INTO log_activity  (aksi,waktu,tabel,id_users)  VALUES (
        '".$aksi."',
         '".$date."',
           '".$tabel."',
         '".$data_id."')";
 $queryy_simpan = mysqli_query($conn, $sqll_simpan);
          echo "<script>
                Swal.fire({title: 'Edit Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-per';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Edit Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-per';
                    }
                })</script>";
    }}
?>

