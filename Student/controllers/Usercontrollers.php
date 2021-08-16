<?php

        require_once 'models/db_config.php';

        $name="";
        $err_name="";
        $uname="";
        $err_uname="";
        $password="";
        $err_password="";
        $err_db="";

        $hasError = false;

 if (isset($_POST["btn_login"])){
          if(empty($_POST["name"])){
             $hasError = true;
             $err_name ="Name  Required";
          }
           else{
                $name = $_POST["name"];
          }

            if(empty($_POST["uname"])){
                $hasError = true;
                $err_uname ="Username  Required";
            }
            else{
                $uname = $_POST["uname"];
            }
            if(empty($_POST["password"])){
                $hasError = true;
                $err_password ="Password  Required";
            }
            else{

                $password = $_POST["password"];

            }




            if(!$hasError){

                if(authenticateUser($name,$uname,$password)){

                    header("Location: dashboard.php");
                }
                $err_db = "Username password invalid";



                }


        }

        function authenticateUser($name,$uname,$password){
            $query = "select * from admin where name='$name' username='$uname' and password = '$password'";
            $rs = get($query);
            if(count($rs) > 0){
                return true;
            }
            return false;



        }


?>
