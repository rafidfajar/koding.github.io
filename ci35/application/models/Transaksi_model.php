<?php
        class Transaksi_model extends CI_Model
        {
        function tampil_data()
        {
        $hasil=$this->db->get('tbl_transaksi');
        return $hasil;
        }
        function get_tampil_data()
        {
        $hasil=$this->db->get('barang')->result();
        return $hasil;
        }
        function get_tampil_data_customer()
        {
        $hasil=$this->db->get('customer')->result();
        return $hasil;
        }
        function get_tampil_data_laporan()
        {
        $hasil=$this->db->get('tbl_transaksi')->result();
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
        'customer_id' =>$data->customer_id,
        'nama_customer' => $data->nama_customer,
        );
        }
        }
        return $hasil;
        }
        function get_nofaktur()
        {
        $q=$this->db->query("select max(right(No_faktur,3)) as nofak
        from tbl_transaksi order by No_faktur desc");
        $kd="";
        if($q->num_rows()>0)
        {
        foreach ($q->result() as $k)
        {
        $tmp = ((int)$k->nofak)+1;
        $kd=sprintf("%04s",$tmp);
        }
        }else{
        $kd="0001";
        }
        date_default_timezone_set("Asia/Jakarta");
        return "FK".$kd;
        }
        function simpan_data($nofaktur,$kode_customer,$nama_customer,
        $kode_barang,$nama_barang,$harga,$qty,$total,$pajak,$grand_total)
        {
        $hasil=$this->db->query("insert into tbl_transaksi(No_faktur,Kode_customer,Nama_customer,Kode_barang,Nama_barang,Harga,Qty,
        Total_bayar,Pajak,Grand_total)
        Values('$nofaktur','$kode_customer','$nama_customer','$kode_barang',
        '$nama_barang','$harga','$qty','$total','$pajak','$grand_total')");
        return $hasil;
        }
        function cetak_transaksi(){
            $kb=$this->uri->segment(3);
            $hsl=$this->db->query("select * from tbl_transaksi where No_faktur='$kb'");
            return $hsl;
            }
           
        }
?>