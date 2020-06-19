<?php

include_once("controller.php");

class Users extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Login($username, $password)
    {
        if (!empty($username) && !empty($password)) {
            $st = $this->db->prepare("select * from tb_user where username=? AND password=?");
            $st->bindParam(1, $username);
            $st->bindParam(2, $password);
            $st->execute();
            $data = $st->fetchAll();
            foreach ($data as $rows_user) {
                $_SESSION['id'] = $rows_user['id'];
                $_SESSION['username'] = $rows_user['username'];
                $_SESSION['password'] = $rows_user['password'];

            }


            if ($st->rowCount() == 1) {

                echo "<script>alert('Login Has Been Success');</script>";
               include "layout/index.php";
            } else {
                echo "<script>alert('Incorrect Your Email And Password');</script>";
                echo "<script>location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Please Input Your Password And Email');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
}
