<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Jenis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nama_jenis" placeholder="Nama Jenis" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Jenis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="kode_jenis" placeholder="Kode Jenis" required>
				</div>
			</div>

<div class="form-group row">
        <label class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nama" name="keterangan_jenis" placeholder="Keterangan" required>
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
			<a href="?page=data-jen" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
      
     
    
        $sql_simpan = "INSERT INTO jenis (nama_jenis,kode_jenis,keterangan_jenis) VALUES (
        '".$_POST['nama_jenis']."',
       
         '".$_POST['kode_jenis']."',
  '".$_POST['keterangan_jenis']."')";
        
        $query_simpan = mysqli_query($conn, $sql_simpan);
      

    if ($query_simpan) {
     date_default_timezone_set('Asia/Jakarta');

$data_id = $_SESSION['id_users'];
$date=date('Y-m-d H:i:s');
$aksi = "CREATE";
$tabel="Jenis";
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
                        window.location = 'index.php?page=data-jen';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-jen';
                    }
                })</script>";
    }}


