<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM inventaris WHERE id_inventaris='".$_GET['kode']."'";
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

          <input type='hidden' class="form-control" name="id_inventaris" value="<?php echo $data_cek['id_inventaris']; ?>"
             readonly/>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="nama" value="<?php echo $data_cek['nama']; ?>"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kondisi" value="<?php echo $data_cek['kondisi']; ?>"
                    />
                </div>
            </div>


                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control"  name="tanggal_register"  value="<?php echo $data_cek['tanggal_register']; ?>" placeholder="Keterangan" required>
                </div>
            </div>

<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tahun Anggaran</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="tahun_anggaran" value="<?php echo $data_cek['tahun_anggaran']; ?>" placeholder="Tahun Anggaran" required>
                </div>
            </div>

<div class="form-group row">
                <label class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control"  name="jumlah" placeholder="Jumlah" value="<?php echo $data_cek['jumlah']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>"
                    />
                   
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
                    <input type="text" class="form-control" id="no_hp" name="id_level" placeholder="Role" value="<?php echo $data_cek['id_level']; ?>" readonly="true" required>
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
            <a href="?page=data-inv" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
        $kode_inventaris = $_POST['kode_jurusan'].".".$_POST['kode_jenis'].".".$_POST['id_dana'].".".$_POST['tahun_anggaran'];
    $sql_ubah = "UPDATE inventaris SET
        nama='".$_POST['nama']."',
        kondisi='".$_POST['kondisi']."',
          keterangan='".$_POST['keterangan']."',
           jumlah='".$_POST['jumlah']."',
         tanggal_register='".$_POST['tanggal_register']."',
           tahun_anggaran='".$_POST['tahun_anggaran']."',
       id_dana='".$_POST['id_dana']."',
        kode_inventaris='".$kode_inventaris."',
         kode_jenis='".$_POST['kode_jenis']."',
           id_ruang='".$_POST['id_ruang']."',
            id_level='".$_POST['id_level']."',
             kode_jurusan='".$_POST['kode_jurusan']."'
        WHERE id_inventaris='".$_POST['id_inventaris']."'";
    $query_ubah = mysqli_query($conn, $sql_ubah);
   

    if ($query_ubah) {

         $data_id = $_SESSION['id_users'];
     date_default_timezone_set('Asia/Jakarta');
        $date=date('Y-m-d H:i:s');
$aksi = "UPDATE";
$tabel="Inventaris";
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
                        window.location = 'index.php?page=data-inv';
                    }
                })</script>";
                }else{
                echo "<script>
                Swal.fire({title: 'Edit Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-inv';
                    }
                })</script>";
    }}
?>

