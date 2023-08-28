<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	public function index()
	{
		$data['materi']="belajar framework ci asik";
        function sapaan()
        {
            $x="Selamat pagi guna kuu";
            return $x;
        }
        sapaan();
        //$hasil=sapaan();
        //$data['hasil']=$hasil;
        $this->load->view('latihan',$data);
	}
   
}
