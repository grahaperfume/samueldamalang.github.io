<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{

            // inisialisasi model mahasiswa di method __construct
            function __construct()
            {
                        parent:: __construct();
                        $this->load->model('Tbl_mahasiswa_model');
            }
            function tampilkan_data()
            {
                        $data['mahasiswa'] = $this->Tbl_mahasiswa_model->ambil_data()->result();
                        $this->load->view('data_mhs.php', $data);
            }
};
