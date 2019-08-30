<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
  public function index(){
    $data['current_page'] = "profile";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $this->load->model("login_model");
      $data['title'] = "Profil";
      $data['subview'] = "profil";

      $data['user'] = $this->login_model->getAdminViaId($this->session->userdata['admin']['admin_id']);

      $data['ownpros'] = $this->login_model->getOwnProjects($this->session->userdata['admin']['admin_id']);
      $data['attpros'] = $this->login_model->getAttendProjects($this->session->userdata['admin']['admin_id']);


      $this->load->view('layouts/standart',$data);
    }
    else{
      header("Location: ".base_url()."Login");
    }
  }

  public function yourprojects(){
     $data['current_page'] = "projects";
    if(isset($this->session->userdata['admin']['admin_id'])){
        $this->load->model("login_model");
      $data['title'] = "Projects";
      $data['subview'] = "projects";

      $data['user'] = $this->login_model->getAdminViaId($this->session->userdata['admin']['admin_id']);

      $data['ownpros'] = $this->login_model->getOwnProjects($this->session->userdata['admin']['admin_id']);
      $data['attpros'] = $this->login_model->getAttendProjects($this->session->userdata['admin']['admin_id']);


      $this->load->view('layouts/standart',$data);
       }
    else{
      header("Location: ".base_url()."Login");
    }
  }


  public function project_detail($proid){
     $data['current_page'] = "projects";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $this->load->model("login_model");
      $data['title'] = "Projects Detail";
      $data['subview'] = "projects_detail";

      $data['pro'] = $this->login_model->getProject($proid);

      $atts=$data['pro'][0]['attend'];

      $atts=explode(',', $atts);

      $count=0;

      foreach ($atts as $key => $value) {
        
        $data['atts'][$count]=$this->login_model->getAdminViaId($value);
        $count++;

      }

      $data['owner']=$this->login_model->getAdminViaId($data['pro'][0]['user_id']);


      $this->load->view('layouts/standart',$data);
       }
    else{
      header("Location: ".base_url()."Login");
    }
  }

    public function profile_detail($userid){
     $data['current_page'] = "projects";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $this->load->model("login_model");
      $data['title'] = "Profile Detail";
      $data['subview'] = "profile_detail";

      $data['user'] = $this->login_model->getAdminViaId($userid);

      $data['ownpros'] = $this->login_model->getOwnProjects($userid);
      $data['attpros'] = $this->login_model->getAttendProjects($userid);


      $this->load->view('layouts/standart',$data);
       }
    else{
      header("Location: ".base_url()."Login");
    }
  }

    public function realprojects(){
     $data['current_page'] = "projects";
    if(isset($this->session->userdata['admin']['admin_id'])){
      $this->load->model("login_model");
      $data['title'] = "Profile Detail";
      $data['subview'] = "realpro";

      $data['pros'] = $this->login_model->getRealPros($this->session->userdata['admin']['admin_id']);

      $counter=0;
      foreach ($data['pros'] as $key) {
        $data['pros'][$counter]['user']=$this->login_model->getAdminViaId($key['user_id']);
        $counter++;
      }


      $this->load->view('layouts/standart',$data);
       }
    else{
      header("Location: ".base_url()."Login");
    }
  }



}