<?php
class Tbl_mahasiswa_model extends CI_Model{
            function ambil_data(){
                        return $this->db->get('tbl_mahasiswa');
            }
}