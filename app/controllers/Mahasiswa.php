<?php

class Mahasiswa extends Controller
{
   public function index()
   {
      $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
      $data['judul'] = 'Mahasiswa';
      $this->view('templates/header', $data);
      $this->view('mahasiswa/index', $data);
      $this->view('templates/footer');
   }
}
