<?php

class About extends Controller
{
   public function index($nama = 'Eko Sutrisno', $pekerjaan = 'Mahasiswa', $umur = 23)
   {

      $data['nama'] = $nama;
      $data['pekerjaan'] = $pekerjaan;
      $data['umur'] = $umur;
      $data['judul'] = 'About';
      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
   }
   public function page()
   {
      $data['judul'] = 'Pages';
      $this->view('templates/header', $data);
      $this->view('about/page', $data);
      $this->view('templates/footer');
   }
}
