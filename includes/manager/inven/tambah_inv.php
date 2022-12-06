<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nama" placeholder="Nama" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kondisi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="kondisi" placeholder="Kondisi" required>
				</div>
			</div>

		

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="alamat" name="tanggal_register" placeholder="Keterangan" required>
				</div>
			</div>


				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Anggaran</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="tahun_anggaran" placeholder="Tahun Anggaran" required>
				</div>
			</div>



			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah</label>
				<div class="col-sm-5">
					<input type="number" class="form-control"  name="jumlah" placeholder="Jumlah" required>
				</div>
			</div>
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>
				</div>
			</div>

		

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Dana</label>
				<div class="col-sm-5">
									<?php

$sql1 = " SELECT * FROM dana ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='id_dana'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["id_dana"] . "'>" . $row["id_dana"] . " - " . $row["nama_dana"] ."</option>";
}
echo "</select>";
?>
				</div>
			</div>

			

			

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis</label>
				<div class="col-sm-5">
				<?php

$sql1 = " SELECT * FROM jenis ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='kode_jenis'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["kode_jenis"] . "'>" . $row["kode_jenis"] . " - " . $row["nama_jenis"] ."</option>";
}
echo "</select>";
?>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ruang</label>
				<div class="col-sm-5">
					<?php

$sql1 = " SELECT * FROM ruang ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='id_ruang'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["id_ruang"] . "'>" . $row["id_ruang"] . " - " . $row["nama_ruang"] ."</option>";
}
echo "</select>";
?>
				</div>
			</div>

<div class="form-group row">
				<label class="col-sm-2 col-form-label">Role</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_hp" name="id_level" placeholder="Role" value="1" readonly="true" required>
				</div>
			</div>
<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-5">
					<?php

$sql1 = " SELECT * FROM jurusan ";
$result1 = mysqli_query($conn, $sql1);
echo "<select class='form-control' name='kode_jurusan'>";
while ($row = mysqli_fetch_array($result1)) {
  echo "<option value='" . $row["kode_jurusan"] . "'>" . $row["kode_jurusan"] . " - " . $row["nama_jurusan"] ."</option>";
}
echo "</select>";
?>
				</div>
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
			<a href="?page=data-inv" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
      
        $nomor=rand(100,999);
    	$kode_inventaris = $_POST['kode_jurusan'].".".$_POST['kode_jenis'].".".$_POST['id_dana'].".".$_POST['tahun_anggaran'].".".$nomor;
    
        $sql_simpan = "INSERT INTO inventaris (nama,kondisi,keterangan,nomor,jumlah,tanggal_register,tahun_anggaran,id_dana,kode_inventaris,kode_jenis,id_ruang,id_level,kode_jurusan,berita) VALUES (
        '".$_POST['nama']."',
        '".$_POST['kondisi']."',
         '".$_POST['keterangan']."',
          '".$nomor."',
        '".$_POST['jumlah']."',
        
         '".$_POST['tanggal_register']."',
         '".$_POST['tahun_anggaran']."',
          '".$_POST['id_dana']."',
         
            '".$kode_inventaris."',
             '".$_POST['kode_jenis']."',
              '".$_POST['id_ruang']."',
        '".$_POST['id_level']."',
         '".$_POST['kode_jurusan']."',
           '"."1"."')";
        
        $query_simpan = mysqli_query($conn, $sql_simpan);
      

    if ($query_simpan) {

    	date_default_timezone_set('Asia/Jakarta');

$data_id = $_SESSION['id_users'];
$date=date('Y-m-d H:i:s');
$aksi = "CREATE";
$tabel="Inventaris";
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
                        window.location = 'index.php?page=data-inv';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-inv';
                    }
                })</script>";
    }}


