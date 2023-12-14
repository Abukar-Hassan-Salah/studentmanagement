<?php

error_reporting(0);
session_start();
# these following steps are the database and system connection
$host="localhost";
$user="root";
$password="";
$db="student_management";
$data=mysqli_connect($host,$user,$password,$db);

// checking the connection
if($data==false)
{
    die("Connection failed:");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name =$_POST['username'];
    $pass =$_POST['password'];

    $sql="select * from user where username='".$name."' AND password='" .$pass."'" ;

    // execute query
    $result=mysqli_query($data, $sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="student";
        header("location:studenthome.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="admin";
        header("location:adminhome.php");
    }
    else
    {
        session_start();
        // session_destroy();
        $message = "Invalid Username or Password!";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }
}
?>