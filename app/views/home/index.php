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
<div class="container">
   <div class="jumbotron mt-4 bg-dark text-white">
      <h1 class="display-4">Selamat Datang Di Website Saya!</h1>
      <h1 class="lead">Halo, Nama Saya <?= $data['nama']; ?></h1>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
   </div>

</div>