<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">Pendaftaran Lomba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Flasher  -->
<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash();?>
    </div>
</div>

<div class="container mt-5 d-flex justify-content-center">
    <h3>List Peserta Pendaftaran Lomba</h3>
  </div>
  <div class="container mt-5">
      </div>
      <!-- Button trigger modal -->
      <div class="row">
          <div class="col-lg-6 ms-4">
              <button type="button" class="btn btn-primary mb-3 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Tambah Peserta
              </button>
            <ul class="list-group">
                <?php foreach($data['Home'] as $lomba) : ?>
                    <li class="list-group-item ">
                        <?= $lomba['nama']; ?>
                        <a href="<?= BASEURL; ?>/home/hapus/<?= $lomba['id']; ?>" class="badge text-bg-danger float-sm-end me-2"
                        onclick="return confirm('konfirmasi hapus')">hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" >Tambah Peserta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Lomba/tambah" method="post">
            <div class="form-group">
                <label for="judul">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="tulisan">Usia</label>
                <input type="text" class="form-control" id="usia" name="usia">
            </div>
            <div class="form-group">
                <label for="penulis">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Peserta</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script></script>
</body>
</html>
