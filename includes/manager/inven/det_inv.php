  <?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT inventaris.*,dana.nama_dana,jenis.nama_jenis,jurusan.kode_jurusan,ruang.nama_ruang,level.nama_level FROM inventaris INNER JOIN dana ON dana.id_dana = inventaris.id_dana INNER JOIN jenis ON jenis.kode_jenis = inventaris.kode_jenis INNER JOIN jurusan ON jurusan.kode_jurusan = inventaris.kode_jurusan INNER JOIN ruang ON ruang.id_ruang = inventaris.id_ruang INNER JOIN level ON level.id_level = inventaris.id_level  WHERE id_inventaris='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
  <div class="col-12 col-xl-8">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0"> <i class="fas fa-eye"></i>Detail</h6>
            </div>
            <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="far fa-trash-alt me-2"></i>Delete</a>
                       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <a href="?page=del-inv&kode=<?php echo $data_cek['id_inventaris'];?>">
        <button type="button" class="btn btn-primary">Ya</button>
    </a>
      </div>
    </div>
  </div>
</div>
                    <a class="btn btn-link text-dark px-3 mb-0"  href="?page=edit-inv&kode=<?php echo $data_cek['id_inventaris'];?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                  </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">ID Inventaris:</h6>
                    
                  </div>

                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['id_inventaris']; ?></a>
                </li>
                 <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Nama:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['nama']; ?></a>
                </li>
                 <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Kondisi:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['kondisi']; ?></a>
                </li>
                 <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Keterangan:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['keterangan']; ?></a>
                </li>

                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Kode Inventaris:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['kode_inventaris']; ?></a>
                </li>

                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Jumlah:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['jumlah']; ?></a>
                </li>

                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Tanggal Register:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['tanggal_register']; ?></a>
                </li>
                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Tahun Anggaran:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['tahun_anggaran']; ?></a>
                </li>
                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Dana:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['nama_dana']; ?></a>
                </li>
                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Jenis:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['nama_jenis']; ?></a>
                </li>

                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Jurusan:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['kode_jurusan']; ?></a>
                </li>
                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Ruang:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['nama_ruang']; ?></a>
                </li>
                   <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                 
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Role:</h6>
                    
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;"><?php echo $data_cek['nama_level']; ?></a>
                </li>
               
              </ul>
            </div>
          </div>
        </div>