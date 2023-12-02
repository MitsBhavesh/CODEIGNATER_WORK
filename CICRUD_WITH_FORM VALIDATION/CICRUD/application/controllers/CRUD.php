<?php
defined("BASEPATH") or exit("No direct script access allowed");

class CRUD extends CI_Controller
{
    public function index()
    {
        // if (isset($_SESSION["Id"])) {
        //     // echo "hiii";exit;
        //     $this->load->view("register.php");
        // } else {
            // echo "byee";exit;
         $this->load->view("crud.php");
        // }
    }
  
    // Insert
    public function Crud_process()
    {
        // echo "hi"; exit;
        // print_r($_POST);exit;
        if(isset($_POST['register']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd = $_POST['password'];
            $cpwd = $_POST['conpassword'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $sql = " EXEC Register_Final_Insert '$fname','$lname','$pwd','$cpwd','$email','$phone','$address'";
            // print_r($sql);exit;

            $result=$this->db->query($sql);
            // print_r($result);
            // exit;
            // $this->session->set_userdata('Arham_user_success',"Data inserted successfully");
            $_SESSION['Arham_user_success'] = "Data inserted successfully";
            // print_r($_SESSION['Arham_user_success']);exit;
            redirect(base_url("CRUD"));
           
            // if (
            // $ClientDetail ==
            // "[Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Executing SQL directly; no cursor."
            // ){
            //     redirect(base_url("crud.php"));
            //  } else {
            //     $this->load->library("session");
            //     $this->session->set_userdata("Id", $Id);
            //     redirect(base_url("REGISTER"));
            // }
        }

    }

    public function GETID_Process()
    {
        // print_r($_GET['id']);
        // exit;

        $Id = $_GET['Id'];

        $query = "select * from Register_Final WHERE Id='".$Id."'";
        $result=$this->db->query($query)->result_array();

        $this->load->view('update.php',['data'=>$result]);
        // print_r($result);
        // exit;
        
    }
    public function UPDATE_Process()
    {
        // echo "hi"; exit;
        // print_r($_POST);exit;
        if(isset($_POST['Update']))
        {
      
            $Id = $_POST['Id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd = $_POST['password'];
            $cpwd = $_POST['conpassword'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];


            $sql = " EXEC PROC_Register_Update '$Id','$fname','$lname','$pwd','$cpwd','$email','$phone','$address'";
            // print_r($sql);

             $result=$this->db->query($sql);
             // print_r($result);
            // exit;
            // exit;

            if (
             $ClientDetail ==   
            "[Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Executing SQL directly; no cursor."
            ){
            
                redirect(base_url("update.php"));
             } else {
                $this->load->library("session");
                $this->session->set_userdata("Id", $Id);
                redirect(base_url("REGISTER"));
            }
        }
        else
        {
            echo " byeee";exit;
        }   
    }
    public function DELETE_Process()
    {
        // echo "hi";
        // print_r($_GET);exit;
       if (isset($_GET['Id']))
       {
            $Id = $_GET['Id'];
            // $fname = $_POST['fname'];
            // $lname = $_POST['lname'];
            // $pwd = $_POST['password'];
            // $cpwd = $_POST['conpassword'];
            // $email = $_POST['email'];
            // $phone = $_POST['phone'];
            // $address = $_POST['address'];

            // $Id = $_GET['Id'];
      
   
       // $sql = " EXEC PROC_Register_Delete '$Id','$fname','$lname','$pwd','$cpwd','$email','$phone','$address'";
        $sql = "DELETE from Register_Final WHERE Id ='$Id' ";
        // print_r($sql);exit;
       $result=$this->db->query($sql);
        // print_r($result);exit;
       if (
             $ClientDetail ==   
            "[Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Executing SQL directly; no cursor."
            ){
            
                //redirect(base_url("update.php"));
             } else {
                $this->load->library("session");
                $this->session->set_userdata("Id", $Id);
                redirect(base_url("REGISTER"));
            }
        }
    }
}

?>
