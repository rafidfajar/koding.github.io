<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aritmatika extends CI_Controller {

	public function index()
	{
        $x=10;
        $y=20;
        //pertambahan
        $hasil=$x+$y;
        $data['x']=$x;
        $data['y']=$y;
        $data['hasil']=$hasil;
        //pengurangan
        $hasil2=$x-$y;
        $data['hasil2']=$hasil2;
        //perkalian
        $hasil3=$x*$y;
        $data['hasil3']=$hasil3;
        //pembagian
        $hasil4=$x/$y;
        $data['hasil4']=$hasil4;
        $this->load->view('aritmatika',$data);
	}
}
