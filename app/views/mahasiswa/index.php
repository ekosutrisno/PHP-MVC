<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href=" <?= BASEURL; ?> ">
         <h1>PHPMVC 1.0</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
            <a class="nav-item nav-link" href="#">Dosen</a>
            <a class="nav-item nav-link" href="#">Program</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about/page">Informasi</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
         </div>
      </div>
   </div>
</nav>
<div class="container mt-5">
   <div class="row">
      <div class="col-4">
         <h3>Daftar Mahasiswa</h3>

         <?php foreach ($data['mhs'] as $mhs) : ?>
            <ul class="list-group mb-3 ">
               <li class="list-group-item"><?= $mhs['nama']; ?></li>
               <li class="list-group-item"><?= $mhs['npm']; ?></li>
               <li class="list-group-item"><?= $mhs['email']; ?></li>
               <li class="list-group-item"><?= $mhs['jurusan']; ?></li>
            </ul>
         <?php endforeach ?>

      </div>
   </div>
</div>