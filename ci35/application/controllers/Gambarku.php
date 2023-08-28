<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gambarku extends CI_Controller {
 
 public function __construct(){
 parent::__construct();
 
 $this->load->model('Gambar_model');
 }
 
 public function index(){
 $data['gambar'] = $this->Gambar_model->view();
 $this->load->view('gambar/gambar', $data);
 }
 public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
    // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
    $upload = $this->Gambar_model->upload();
    
    if($upload['result'] == "success"){ // Jika proses upload sukses
    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
    $this->Gambar_model->save($upload);
    
    redirect('Gambarku'); // Redirect kembali ke halaman awal / halaman view data
    }else{ // Jika proses upload gagal
    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
    }
    }
    
    $this->load->view('gambar/upload_gambar', $data);
    }
   }
   