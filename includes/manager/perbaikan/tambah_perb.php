<?
 $data_id = $_SESSION['id_operator'];
 $kode_jur = $_SESSION['kode_jurusan'];

?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

 <div class="form-group row">
        <label class="col-sm-2 col-form-label">Perawatan</label>
        <div class="col-sm-5">
        <?php

$sql1 = "SELECT perawatan.*,inventaris.kode_inventaris,inventaris.kode_jurusan,inventaris.kondisi  FROM perawatan INNER JOIN  inventaris ON inventaris.id_inventaris = perawatan.id_inventaris WHERE inventaris.kondisi = 'Rusak' and inventaris.kode_jurusan=  $kode_jur ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='id_perawatan'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["id_perawatan"] . "'>" . $row["id_perawatan"] . " - " . $row["kode_inventaris"] ."</option>";
}
echo "</select>";
?>
        </div>
      </div>

		

			


        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Perbaikan</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="nip" name="tanggal_perbaikan"  required>
        </div>
      </div>

        <div class="form-group row">
       
        <div class="col-sm-5">
          <input type="hidden" class="form-control" id="nip" name="tanggal_selesai"  required>
        </div>
      </div>

  <div class="form-group row">
      
        <div class="col-sm-5">
          <input type="hidden" class="form-control" id="nip" name="status" value="1"  required>
        </div>
      </div>

        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Operator</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nip" readonly="true" name="id_operator" value="<?php echo $data_id ?>" required>
        </div>
      </div>

 <div class="form-group row">
        <label class="col-sm-2 col-form-label">Inventaris</label>
        <div class="col-sm-5">
        <?php

$sql1 = " SELECT * FROM inventaris WHERE  inventaris.kondisi = 'Rusak' and inventaris.kode_jurusan=  $kode_jur ";
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
			<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal11">
			 <button type="submit"  class="btn btn-primary" >Simpan</button>
			</a>
			<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
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
        
        <button type="submit" name="Simpan" value="Simpan" class="btn btn-primary">Ya</button>

      </div>
    </div>
  </div>
</div>
			<a href="?page=data-per" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
      
     $id_inventaris = $_POST['id_inventaris'];

 $query = mysqli_num_rows(mysqli_query($conn, "SELECT id_inventaris FROM perbaikan WHERE id_inventaris = '$id_inventaris'")); 
 if($query > 0) {
  echo "<script>alert('inventaris sudah terdaftar pada perbaikan');</script>";
 } else {
 
 

    
        $sql_simpan = "INSERT INTO perbaikan (id_perawatan,tanggal_perbaikan,tanggal_selesai,status,id_operator,id_inventaris) VALUES (
        '".$_POST['id_perawatan']."',
         '".$_POST['tanggal_perbaikan']."',
          '".$_POST['tanggal_selesai']."',
           '".$_POST['status']."',
            '".$_POST['id_operator']."',
         '".$id_inventaris."')";
        
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
    }}


