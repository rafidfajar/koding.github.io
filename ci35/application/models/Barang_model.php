<?php
class Barang_model extends CI_Model
{
    function tampil_data()
    {
        $hasil=$this->db->get('barang');
        return $hasil;
    }
   
    function get_kode_barang()
    {
        $q=$this->db->query("select max(right(barang_id,3)) 
        as kd_max from barang order by barang_id desc");
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
            return "B".$kd;
        }
        function simpan_barang($barang_id,$nama_barang,$harga,$qty)
        {
            $hasil=$this->db->query("insert into barang(barang_id,nama_barang,harga,qty)
            values('$barang_id','$nama_barang','$harga','$qty')");
            return $hasil;
        }
        function delete_barang($barang_id)
        {
            $this->db->where('barang_id',$barang_id);
            $this->db->delete('barang');
        }
        function get_tampil_data()
        {
            $hasil=$this->db->get('barang')->result();
            return $hasil;
        }
function get_data_barang_bykode($kode)
  {
  $hsl=$this->db->query("SELECT * FROM barang WHERE barang_id='$kode'");
  if($hsl->num_rows()>0)
  {
  foreach ($hsl->result() as $data)
  {
  $hasil=array(
  'id_barang' =>$data->barang_id,
  'nama_barang' => $data->nama_barang,
  'harga' => $data->harga,
  'qty' => $data->qty,
  );
  }
  }
  return $hasil;
  }
  function get_data_id($barang_id)
  {
  $query=$this->db->get_where('barang',array('barang_id'=>$barang_id));
  return $query;
  }
  function update($barang_id,$nama_barang,$harga_barang,$qty)
  {
  $data=array(
  'barang_id'=>$barang_id,
  'nama_barang'=>$nama_barang,
  'harga'=>$harga_barang,
  'qty'=>$qty);
  
  $this->db->where('barang_id',$barang_id);
  $this->db->update('barang',$data);
  }
  function get_tampil_data_laporan()
  {
  $hasil=$this->db->get('barang')->result();
  return $hasil; 
  }
}
?>