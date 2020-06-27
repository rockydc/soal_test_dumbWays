<?php

class Home extends Controller {
    //method defaul index
    public function index(){
        $this->view('templates/header');
        $data['provinsi'] = $this->model('Provinsi_Model')->getAll();

        $this->view('home/index',$data);
    }

    public function tambah()
    {

        // var_dump($_POST);
        if($this->model('Provinsi_Model')->tambahDataProvinsi($_POST)>0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '.BASEURL . '/home');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: '.BASEURL . '/home');
            exit;
        }
    }

    public function hapus($id){

        if($this->model('Provinsi_Model')->hapusDataProvinsi($id)>0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '.BASEURL . '/home');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '.BASEURL . '/home');
            exit;
        }
    }

    public function getUbah(){
        echo json_encode($this->model('Provinsi_Model')->getProvinsibyId($_POST['id']));
    }

    public function ubah(){
                // var_dump($_POST);
                if($this->model('Provinsi_Model')->ubahDataProvinsi($id)>0){
                    Flasher::setFlash('berhasil','diubah','success');
                    header('Location: '.BASEURL . '/home');
                    exit;
                }else{
                    Flasher::setFlash('gagal','diubah','danger');
                    header('Location: '.BASEURL . '/home');
                    exit;
                }
    }
}