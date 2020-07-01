<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Mymodel extends CI_Model{
    public function Get($table){
        $res = $this->db->get($table);
        //$res = $this->db->query('SELECT * FROM '.$table);
        return $res->result_array();
        //mengembalikan hasil operasi $res menjadi sebuah array
    }
    public function GetWhere($table, $data){
        $res = $this->db->get_where($table, $data);
        return $res->result_array();
    }
    public function Insert($table, $data){
        $res = $this->db->insert($table, $data);
        return $res;
    }
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where);
        return $res;
    }
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where);
        return $res;
        //melakukan aksi, tidak diubah menjadi array    
    }
    public function GetAnggotaDivisi($id_anggota){
        $res = $this->db->query("SELECT a.nama, ra.id_divisi, ra.status, ra.id_anggota_divisi FROM anggota_divisi ra JOIN divisi a ON ra.id_divisi = a.id_divisi WHERE ra.id_anggota='$id_anggota'");
        //$res = $this->db->query('SELECT * FROM '.$table);
        return $res->result_array();
        //mengembalikan hasil operasi $res menjadi sebuah array 
    }
    public function email_ada_gak($email){
        $sql = "SELECT count(email) as c FROM anggota where email='$email'";
        $query = $this->db->query($sql);
        $res = $query->result_array();
        return $res[0]['c'];
    }
}
?>