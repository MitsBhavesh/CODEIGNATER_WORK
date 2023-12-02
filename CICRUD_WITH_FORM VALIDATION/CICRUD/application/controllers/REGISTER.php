<?php
defined("BASEPATH") or exit("No direct script access allowed");

class REGISTER extends CI_Controller
{
    // Table View
    public function index()
    {
        $sql = "SELECT * FROM Register_Final";
        $result = $this->db->query($sql)->result_array();
        // print_r($result);exit;

        $this->load->view('register.php',['data'=>$result]);
            // $this->load->view("register.php");   
        
    }

}
?>
