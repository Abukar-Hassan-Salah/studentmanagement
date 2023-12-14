<?php
// the connection that connects the database the delete form
$host="localhost";
$user="root";
$password="";
$db="student_management";
$data=mysqli_connect($host,$user,$password,$db);
// these code are using to delete date using user id
if($_GET['student_id'])
{
    $userid=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id=$userid";
    $result=mysqli_query($data,$sql); 
    if($result){
        header("location:view_student.php");
    }
}

?>