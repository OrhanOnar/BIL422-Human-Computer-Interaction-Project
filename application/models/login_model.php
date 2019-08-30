<?php 
    class Login_model extends CI_Model {
        
        function getAdmin($data){
            return $this->db->query("SELECT * FROM admin WHERE admin_name=".$this->db->escape($data['email'])." AND admin_password='".$data['password']."' AND admin_status='1'  LIMIT 1")->row_array(0,"array");
        }

        function getAdminViaId($data){
            return $this->db->query("SELECT * FROM admin WHERE admin_id='".$data."' AND admin_status='1'  LIMIT 1")->row_array(0,"array");
        }

        function getOwnProjects($data){
            return $this->db->query("SELECT * FROM projects WHERE user_id='".$data."'")->result_array();
        }

        function getAttendProjects($data){
            return $this->db->query("SELECT * FROM projects WHERE user_id!='".$data."' AND attend LIKE '%".$data."%' ")->result_array();
        }

        function getProject($data){
            return $this->db->query("SELECT * FROM projects WHERE project_id='".$data."'")->result_array();
        }

        function getRealPros($data){
            return $this->db->query("SELECT * FROM projects WHERE user_id!='".$data."' AND attend NOT LIKE '%".$data."%' ")->result_array();
        }

    }
?>