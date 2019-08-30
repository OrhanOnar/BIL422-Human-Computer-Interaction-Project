<?php 
    class Dashboard_model extends CI_Model {
        
        function get_books(){
            return $this->db->query("SELECT * FROM book LIMIT 4")->result_array();
        }


        function get_authors(){
            return $this->db->query("SELECT * FROM author LIMIT 3")->result_array();
        }

        function get_year($book_id){
            return $this->db->query("SELECT write_year FROM writes AS w, book AS b WHERE b.book_id='".(int)$book_id."' AND b.author_id=w.author_id")->row(0,"array");
        }

        function get_category($book_id){
            return $this->db->query("SELECT c.name FROM category AS c, book AS b WHERE b.book_id='".(int)$book_id."' AND b.category_id=c.category_id")->row(0,"array");
        }


    }
?>