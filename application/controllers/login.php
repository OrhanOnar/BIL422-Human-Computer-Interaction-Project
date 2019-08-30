<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function index(){
    $data['current_page'] = "main";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $data['subview'] = "main";
      $data['title'] = "Anasayfa";  
     
      $this->load->view('layouts/standart',$data);
    }
    else{
      $data['title'] = "Giriş";
      if($this->input->post()){
        $this->load->model("login_model");
        $admin = $this->login_model->getAdmin($this->input->post());
        if(empty($admin)){
          $this->session->set_flashdata('error', 'Hatalı kullanıcı adı veya şifre girdiniz.');
          header("Location: ".base_url()."Login");
        }
        else{
          $this->session->set_userdata('admin',$admin);
          header("Location: ".base_url()."Dashboard");
        }
      }
      else{
        $this->load->view('layouts/login',$data);
      }
    }
  }

  public function out(){
    $this->session->sess_destroy();
    header("Location: ".base_url()."Login");
  }



}