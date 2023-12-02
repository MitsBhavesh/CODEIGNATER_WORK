<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Welcome extends CI_Controller
{
    public function index()
    {
        if (!isset($_SESSION["Username"])) {
            $this->load->view("login");
        } else {
            $this->load->view("welcome");
        }
    }
}
