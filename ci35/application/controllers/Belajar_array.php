<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_array extends CI_Controller {

	public function index()
	{
        $dataa=['Buku','Spidoo','Tas'];
        $data['hasil']=$dataa;
        $this->load->view('array',$data);
	}
   
}
