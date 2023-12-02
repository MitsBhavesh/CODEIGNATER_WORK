<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Login extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION["Username"])) {
            $this->load->view("welcome.php");
        } else {
            $this->load->view("login.php");
        }
    }

    public function login_process()
    {
        $uname = $_POST["uname"];
        $password = $_POST["password"];

        $sql = " EXEC USP_LOGIN '$uname','$password'";

        $ClientDetail = $this->db->query($sql);

        if (
            $ClientDetail ==
            "[Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Executing SQL directly; no cursor."
        ) {
            redirect(base_url("Home"));
        } else {
            $this->load->library("session");

            $this->session->set_userdata("Username", $uname);
            $this->session->set_userdata("password", $password);
            redirect(base_url("Welcome"));
        }
    }

    public function logout()
    {
        unset($_SESSION["Username"]);
        redirect("Login");
    }
}
?>
