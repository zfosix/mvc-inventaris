<?php
class Home extends Controller
{
     public function index()
     {
          $data['judul'] = 'Home';
          $this->view('templates/header', $data);
          $this->view('home/index', $data);
          $this->view('templates/footer');
     }

     public function page()
     {
          $data['judul'] = 'Page';
          $data['gambar'] = 'belajar.jpeg';
          $data['nama'] = 'Fajar Fauzian';
          $data['pekerjaan'] = 'ngoding terus';
          $this->view('templates/header', $data);
          $this->view('home/page', $data);
          $this->view('templates/footer');
     }
}
