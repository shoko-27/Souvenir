<?php
   require_once 'user.php';
   $user = new User;

   session_start();

   if(isset($_POST["account"])){
       $uname = $_POST["uname"];
       $pass = $_POST["pass"];
       $fname = $_POST["fname"];
       $lname = $_POST["lname"];
       $email = $_POST["email"];
   
       $user->createUser($uname, $pass, $fname, $lname, $email);
   }


    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $id = $user->login($email,$pass);

        if($id){
            $_SESSION['loginid'] = $id;
            // echo $id;
            header("Location: ../../user.php");
        }else{
            echo "Incorect username and password";
        }
    }




