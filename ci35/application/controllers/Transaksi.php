<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$nm='tv';
        $hrg=1800000;
        $qty=1;
        $total=$hrg*$qty;
        $data['nm']=$nm;
        $data['hrg']=$hrg;
        $data['qty']=$qty;
        $data['total']=$total;

        $this->load->view('transaksi',$data);
	}
   
}