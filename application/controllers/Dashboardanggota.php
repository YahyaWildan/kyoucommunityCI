<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboardanggota extends CI_Controller{
    public function index(){
        if(!empty($this->session->userdata('id_anggota'))){
            $this->load->view('anggota/index');
        }else{
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function profil($id_anggota){
        $this->load->model('mymodel');
        $anggota = $this->mymodel->GetWhere('anggota', array('id_anggota'=>$id_anggota));
        $data = array(
            'id_anggota'=>$id_anggota,
            'username' => $anggota[0]['username'],
            'email' => $anggota[0]['email'],
            'password' => $anggota[0]['password'],
            'nama_lengkap' => $anggota[0]['nama_lengkap'],
            'tempat_lahir' => $anggota[0]['tempat_lahir'],
            'tanggal_lahir' => $anggota[0]['tanggal_lahir'],
            'alamat' => $anggota[0]['alamat'],
            'no_hp' => $anggota[0]['no_hp'],
            'foto' => $anggota[0]['foto']
        );
        $this->load->view('anggota/profil',$data);
    }
    public function proses_edit_profil($id_anggota){
        $this->load->model('mymodel');
        $data = array(
            'username' => $this->input->post('username'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        if(!empty($_FILES['foto']['tmp_name'])){
            $data['foto']="assets/img/anggota/".$this->_uploadImage();
        }
        $where = array(
            'id_anggota' => $id_anggota
        );
        // var_dump($data);
        $query = $this->mymodel->Update('anggota',$data,$where);
        if($query){
            echo "<script>alert('Edit anggota sukses') </script>";
            $this->profil($id_anggota);
        }else{
            echo "<script>alert('Edit anggota gagal') </script>";
            $this->profil($id_anggota);
        }        
    }
    private function _uploadImage(){
        // $config['upload_path'] = "assets/img/anggota";
        $config['allowed_types'] = '*';
        $config['file_name'] = date("y-m-d h-i-sa").$_FILES['foto']['name'];
        $config['overwrite'] = true;
        $config['max_size'] = 2048; //2mb
        
        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto')){
            // echo "berhasil";
            return $this->upload->data("file_name");
        }else{
              // echo $errors = $this->upload->display_errors();
              return "assets/img/anggota/default.png"; //menyiapkan foto default
        }
    }

    public function divisi($id_anggota){
        $this->load->model('mymodel');
        $divisi_anggota = $this->mymodel->GetAnggotaDivisi($id_anggota);
        $data = array(
           'data'=>$divisi_anggota,
        );
        $this->load->view('anggota/divisi',$data);
    }
    public function hapus_divisi($id_anggota_divisi){
        $this->load->model('mymodel');
        $id_anggota_divisi = array(
            'id_anggota_divisi' => $id_anggota_divisi

        );
        
        $query = $this->mymodel->Delete('anggota_divisi', $id_anggota_divisi);
        if($query){
            echo "<script>alert('Hapus anggota divisi sukses') </script>";
            $this->divisi($this->session->userdata('id_anggota'));
        }else{
            echo "<script>alert('Hapus anggota divisi gagal') </script>";
            $this->divisi($this->session->userdata('id_anggota'));
        }        
    }
    public function daftar_divisi($id_anggota){
        $this->load->model('mymodel');
        $divisi = $this->mymodel->Get('divisi');
        $data = array(
           'data'=>$divisi
        );
        $this->load->view('anggota/daftar_divisi',$data);
    }
    public function proses_daftar_divisi($id_anggota){
        $this->load->model('mymodel');
        $data = array(
            'id_anggota' => $id_anggota,
            'id_divisi' => $this->input->post('divisi')
        );
        $query = $this->mymodel->Insert('anggota_divisi',$data);
        if($query){
            echo "<script>alert('Daftar anggota divisi sukses') </script>";
            $this->divisi($id_anggota);
        }else{
            echo "<script>alert('Daftar anggota divisi gagal') </script>";
            $this->daftar_divisi($id_anggota);
        }      
    }
}
?>