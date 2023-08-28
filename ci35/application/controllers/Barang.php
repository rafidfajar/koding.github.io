<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
	public function index()
	{
        $data['Barang']=$this->Barang_model->tampil_data();
        $this->load->view('barang_view',$data);
	}

    function Add_barang()
    {
        $data['Barang']=$this->Barang_model->get_kode_barang();
        $this->load->view('Add_barang',$data);
    }
    function simpan_barang()
    {
        $barang_id=$this->input->post('barang_id');
        $nama_barang=$this->input->post('nama_barang');
        $harga=$this->input->post('harga_barang');
        $qty=$this->input->post('qty');
        $this->Barang_model->simpan_barang($barang_id,$nama_barang,$harga,$qty);
        redirect('Barang');


        
    }
    function delete_barang()
    {
        $barang_id=$this->uri->segment(3);
        $this->Barang_model->delete_barang($barang_id);
        redirect('Barang');
    }
    
            function Edit_barang()
            {
            $barang_id=$this->uri->segment(3);
            $result=$this->Barang_model->get_data_id($barang_id);
            if ($result->num_rows()>0)
            {
            $i=$result->row_array();
            $data=array(
            'barang_id'=>$i['barang_id'],
            'nama_barang'=>$i['nama_barang'],
            'harga_barang'=>$i['harga'],
            'qty'=>$i['qty'],
            );
            $this->load->view('Edit_barang_view',$data);
            }
            else
            {
            echo "Data Tidak Ditemukan";
            }
            }
            function Update()
            {
            $barang_id=$this->input->post('barang');
            $nama_barang=$this->input->post('Nama_barang');
            $harga_barang=$this->input->post('Harga_barang');
            $qty=$this->input->post('qty');
            $this->Barang_model->update($barang_id,$nama_barang,$harga_barang,$qty);
            redirect('Barang');
            }
           
    function export_data()
    {
    // Load plugin PHPExcel nya
    //require_once 'PHPExcel/PHPExcel.php';
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal file excel
    $excel->getProperties()->setCreator('My Notes Code')
     ->setLastModifiedBy('My Notes Code')
     ->setTitle("Laporan Penjualan Barang")
     ->setSubject("Penjualan Barang")
     ->setDescription("Laporan Semua Data Penjualan Barang")
     ->setKeywords("Data Penjualan Barang");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
     'font' => array('bold' => true), // Set font nya jadi bold
     'alignment' => array(
     'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
     'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
     ),
     'borders' => array(
     'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
     'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set borderright dengan garis tipis
     'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
     'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
     )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
     'alignment' => array(
     'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
     ),
     'borders' => array(
     'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
     'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border right dengan garis tipis
     'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
     'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
     )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "LAPORAN DATA BARANG"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai F1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text centeruntuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "Barang Id"); // Set kolom B3 dengan tulisan "No Faktur"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama Barang"); // Set kolom C3 dengan tulisan "Kode Customer"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "Harga"); // Set kolom D3 dengan tulisan "Nama Customer"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "Qty"); // Set kolom E3 dengan tulisan "Kode Barang"
   
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
 
    // Set height baris ke 1, 2 dan 3
    $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
    // Buat query untuk menampilkan semua data Laporan Penjualan
    $laporan=$this->Barang_model->get_tampil_data_laporan();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($laporan as $data){ // Ambil semua data dari hasil eksekusi $sql
     $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
     $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->barang_id);
     $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_barang);
     $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->harga);
     $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->qty);
    
     // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
     $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
     $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
     $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
     $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
     $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
 
     $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
     
     $no++; // Tambah 1 setiap kali looping
     $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
  
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Transaksi");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Laporan list barang.xlsx"'); 
    // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
    }
    public function cetak_pdf()
 {
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
 $this->load->library('pdfgenerator');
 
 // title dari pdf
 $this->data['title_pdf'] = 'Laporan Penjualan Barang';
 $tanggal=date("d-m-Y");
 // filename dari pdf ketika didownload
 $file_pdf = 'Laporan_Penjualan_Barang';
 // setting paper
 $paper = 'F4';
 //orientasi paper potrait / landscape
 $orientation = "landscape";
 //tampilkan data transaksi
 $data['barang']=$this->Barang_model->tampil_data();
$html = $this->load->view('laporan/laporan_pdfb',$data, true); 
 
 // run dompdf
 $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation,$tanggal);
 }
}