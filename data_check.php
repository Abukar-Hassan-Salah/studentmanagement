<?php
# database connection
# these following steps are the database and system connection
$host="localhost";
$user="root";
$password="";
$db="student_management";
$data=mysqli_connect($host,$user,$password,$db);
if($data==false) 
{die("Connection Failed!");
} 
// excute when pressed the apply button
if(isset($_POST['apply']))
{
    $data_name=$_POST["name"];
    $data_email=$_POST["email"];
    $data_phone=$_POST["phone"];
    $data_message=$_POST["message"];
    // insert data into table
   $sql="INSERT INTO admision(name,email,phone,message)values('$data_name','$data_email','$data_phone','$data_message')";
   $result=mysqli_query($data,$sql);
   if($result)
   { 
    $_SESSION['message']="Your Application Sent Data Successfully";
    header("location:index.php");
   }
   else
   {
    $_SESSION['message']="Your Application Is Not Sent Data Successfully";
    header("location:index.php");
   }

}
// if data is not connected with server then it will show this message.
?>