<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_api extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mymodel');
    }
    function index(){
        // $relawan = $this->mymodel->Get('relawan');
        // $relawan = $this->db->query('SELECT username, email FROM relawan')->result();
        $id_anggota = $this->input->get('id_anggota');
        if($id_anggota == ''){
            $anggota = $this->mymodel->Get('anggota');
        }else{
            $anggota = $this->mymodel->GetWhere('anggota', array('id_anggota'=>$id_anggota));
        }
        echo json_encode($anggota);
    }
    function daftar_anggota(){
        $data =  array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password'))
        );
        $query = $this->mymodel->Insert('anggota',$data);
        if($query){
            $hasil = array('status'=>'Berhasil Daftar anggota');
            echo json_encode($hasil);
        }else{
            $hasil = array('status'=>'Gagal Daftar anggota');
            echo json_encode($hasil);
        }
    }
    function update_username_anggota(){
        $data =  array(
            'username'=>$this->input->post('username'),
        );
        $where = array(
            'id_anggota' => $this->input->post('id_anggota')
        );
        $query = $this->mymodel->Update('anggota',$data,$where);
        if($query){
            $hasil = array('status'=>'Berhasil Edit Username anggota');
            echo json_encode($hasil);
        }else{
            $hasil = array('status'=>'Gagal Edit Username anggota');
            echo json_encode($hasil);
        }
    }
    function hapus_anggota($id_anggota){
        $id_anggota = array(
            'id_anggota' => $id_anggota
        );
        $query = $this->mymodel->Delete('anggota', $id_anggota);
        if($query){
            $hasil = array('status'=>'Berhasil Delete anggota');
            echo json_encode($hasil);
        }else{
            $hasil = array('status'=>'Gagal Delete anggota');
            echo json_encode($hasil);
        }
    }
}
?>