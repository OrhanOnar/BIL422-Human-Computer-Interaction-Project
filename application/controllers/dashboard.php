<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function index(){
    $data['current_page'] = "main";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $data['title'] = "Anasayfa";
      $data['subview'] = "main";
      $this->load->view('layouts/standart',$data);
    }
    else{
      header("Location: ".base_url());
    }
  }


}