<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function proses_daftar_anggota()
	{
		$this->load->model('mymodel');
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
	 //    echo $data;
	 //    var_dump($data);
		$query = $this->mymodel->Insert('anggota', $data);
		
		if($query){
			echo "<script>alert('Daftar Anggota Sukses')</script>";
			$this->load->view('index');
		}
		else{
			echo "<script>alert('Daftar Anggota Gagal')</script>";
			$this->load->view('index');
		}
	}
	function proses_login_anggota(){
		$this->load->model('mymodel');
        $where=array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        $cek = $this->mymodel->GetWhere('anggota', $where);
        $count_cek = count($cek);
        if($count_cek > 0){
            $data_session = array(
                'id_anggota' => $cek[0]['id_anggota'],
                'username' => $cek[0]['username'],
                'foto' => $cek[0]['foto'],
            );
            $this->session->set_userdata($data_session);
            echo "<script>alert('Login Anggota Sukses')</script>";
            redirect(base_url("index.php/dashboardanggota"));
        }else{
            echo "<script>alert('Login Anggota Gagal')</script>";
            $this->index();
        }
	}
	function email_ada(){
		$this->load->model('mymodel');
		$email = $this->input->post('email');
		if($this->mymodel->email_ada_gak($email)>0){
			echo '1';
		}else{
			echo '0';
		}
	}
}
