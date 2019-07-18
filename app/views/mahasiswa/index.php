	<div class="container mt-3">

		<!-- Flash -->
		<div class="row">
			<div class="col-lg6">
				<?php Flasher::flash(); ?>
			</div>
		</div>
	<div class="row">
		<div class="col-lg-6">

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
			  Tambah Data Mahasiswa
			</button>
			<br><br>
			<h3>Data Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach($data['mhs'] as $mhs) : ?>
				  	<li class="list-group-item ">
				  		<?= $mhs['nama']; ?>
				  		<a href="<?= BASEURL;?>/mahasiswa/detile/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detile</a>
				  		<a href="<?= BASEURL;?>/mahasiswa/getubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
				  		<a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin mau hapus.?');">Hapus</a>
				  	</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        	
        	<div class="form-group">
				<label for="nama">Nama</label>
			    <input type="nama" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
				<label for="nim">Nim</label>
			    <input type="text" class="form-control" id="nim" name="nim">
			</div>

			<div class="form-group">
				<label for="email">email</label>
			    <input type="emial" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Teknik Komputer">Teknik Komputer</option>
			      <option value="Manajemen Informatika">Manajemen Informatika</option>
			      <option value="Sistem Informasi">Sistem Informasi</option>
			      <option value="Akuntansi">Akuntansi</option>
			    </select>
			  </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class ="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>