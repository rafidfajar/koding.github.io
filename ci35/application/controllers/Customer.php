<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }
	public function index()
	{
        $data['Customer']=$this->Customer_model->tampil_data();
        $this->load->view('customer_view',$data);
	}
    function Add_customer()
    {
        $data['Customer']=$this->Customer_model->get_kode_customer();
        $this->load->view('Add_customer',$data);
    }
    function simpan_customer()
    {
        $customer_id=$this->input->post('customer_id');
        $nama_customer=$this->input->post('nama_customer');
        $alamat=$this->input->post('alamat');
        $telpon=$this->input->post('telpon');
        $this->Customer_model->simpan_customer($customer_id,$nama_customer,$alamat,$telpon);
        redirect('Customer');


        
    }
    function delete_customer()
    {
        $customer_id=$this->uri->segment(3);
        $this->Customer_model->delete_customer($customer_id);
        redirect('Customer');
    }
    function Edit_customer()
    {
    $customer_id=$this->uri->segment(3);
    $result=$this->Customer_model->get_data_id($customer_id);
    if ($result->num_rows()>0)
    {
    $i=$result->row_array();
    $data=array(
    'customer_id'=>$i['customer_id'],
    'nama_customer'=>$i['nama_customer'],
    'alamat'=>$i['alamat'],
    'telpon'=>$i['telpon'],
    );
    $this->load->view('Edit_customer_view',$data);
    }
    else
    {
    echo "Data Tidak Ditemukan";
    }
    }
    function Update()
    {
    $customer_id=$this->input->post('customer');
    $nama_customer=$this->input->post('nama_customer');
    $alamat=$this->input->post('alamat');
    $telpon=$this->input->post('telpon');
    $this->Customer_model->update($customer_id,$nama_customer,$alamat,$telpon);
    redirect('Customer');
    }

}