<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
    
    private $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->cekSession();
        $this->data['profile'] = $this->getUser();
    }
    
    public function index(){
        $this->data['kls'] = $this->getMKKls();
        $this->data['mkdosen'] = $this->getUser();
	$this->load->view('dosen/kelas',$this->data);
    }
    
    private function getMKKls(){
        $this->load->model('dosen/mkelas');
        return $this->mkelas->getMkKls($this->session->userdata['logged_in']['username']);
    }
    
    private function getUser(){
        $this->load->model('dosen/muser');
        return $this->muser->getUser($this->session->userdata['logged_in']['username']);
    }
    
    private function cekSession(){
        if(isset($this->session->userdata['logged_in'])){
            if($this->session->userdata['logged_in']['kat_user'] !== 'dosen'){
                redirect('login', 'refresh');
            }
        }else{
            redirect('login', 'refresh');
        }
    }
    
}