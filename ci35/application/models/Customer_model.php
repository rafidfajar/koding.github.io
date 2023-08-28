<?php
class Customer_model extends CI_Model
{
    function tampil_data()
    {
        $hasil=$this->db->get('customer');
        return $hasil;
    }
    function get_kode_customer()
    {
        $q=$this->db->query("select max(right(customer_id,3)) 
        as kd_max from customer order by customer_id desc");
        $kd="";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp=((int)$k->kd_max+1);
                $kd=sprintf("%03s",$tmp);
            }
    }
         
            else
            {
                $kd="001";
            }
            date_default_timezone_set("Asia/Jakarta");
            return "A".$kd;
        }
        function simpan_customer($customer_id,$nama_customer,$alamat,$telpon)
        {
            $hasil=$this->db->query("insert into customer(customer_id,nama_customer,alamat,telpon)
            values('$customer_id','$nama_customer','$alamat','$telpon')");
            return $hasil;
        }
        function delete_customer($customer_id)
        {
            $this->db->where('customer_id',$customer_id);
            $this->db->delete('customer');
        }
        function get_tampil_dataa()
        {
            $hasil=$this->db->get('customer')->result();
            return $hasil;
        }
        function get_data_customer_bykode($kode)
            {
                $hsl=$this->db->query("SELECT * FROM customer WHERE customer_id='$kode'");
                if($hsl->num_rows()>0)
                {
                foreach ($hsl->result() as $data)
            {
            $hasil=array(
                'id_customer' =>$data->customer_id,
                'nama_customer' => $data->nama_customer,
                'alamat' => $data->alamat,
                'telpon' => $data->telpon,
            );
            }
            }
            return $hasil;
            }
            function get_data_id($customer_id)
            {
            $query=$this->db->get_where('customer',array('customer_id'=>$customer_id));
            return $query;
            }
            function update($customer_id,$nama_customer,$alamat,$telpon)
            {
            $data=array(
            'customer_id'=>$customer_id,
            'nama_customer'=>$nama_customer,
            'alamat'=>$alamat,
            'telpon'=>$telpon);
            
            $this->db->where('customer_id',$customer_id);
            $this->db->update('customer',$data);
            }

    }