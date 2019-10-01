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

<div class="container mt-4 text-center">
   <img src="<?= BASEURL ?>/img/profile/4.png" alt="Eko Sutrisno" width="25%" class="mt-5 rounded-circle img-thumbnail shadow">
   <h1 class="mt-5"> <strong>Profile Tentang Saya</strong></h1>
   <p>Halo nama saya <?= $data['nama']; ?>, Saya seorang <?= $data['pekerjaan']; ?>, saya berumur <?= $data['umur']; ?> Tahun</p>
</div>

<div class="container bg-dark">
   <div class="row">
      <div class="col">

      </div>
   </div>
</div>