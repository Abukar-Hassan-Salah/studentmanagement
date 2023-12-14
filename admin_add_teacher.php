<?php
session_start();
session_destroy();
    if(! isset($_SESSION['username']))
    {
        header("loction:login.php");
    }
    elseif($_SESSION['usertype']=='student'){
        header("location:login.php");
    }
# connecting the database and the add student form
# these following steps are the database and system connection

# database connection
# these following steps are the database and system connection
$host="localhost";
$user="root";
$password="";
$db="student_management";
$data=mysqli_connect($host,$user,$password,$db);
if($data==false) 
{
    die("Connection Failed!");
} 
// excute when pressed the apply button
if(isset($_POST['add_student']))
{
    $data_name=$_POST["name"];
    $data_email=$_POST["email"];
    $data_phone=$_POST["phone"];
    $data_password=$_POST["password"];
    $usertype="student";
    // insert data into table
   $sql="INSERT INTO user(username,email,phone,usertype,password)
   values('$data_name','$data_email','$data_phone','$usertype','$data_password')";
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style  type="text/css">
        label {
            display: inline-block;
            tex-align :right;
            width :200px;
            padding-top :10px;
            padding-bottom :10px;
        }

        .div_design {
            background-color:skyblue;
            width:400px;
            padding-top:70px;
            padding-bottom:70px
        }

    </style>
    <link rel="stylesheet" href="admin.css">
    <?php
    include 'admin_css.php';
    ?>

</head>
<body>
<?php
include'admission_side_bar.php'
?>
   <div class="content">
    <center>
    <h1>Add Student</h1>
    <div class="div_design">
        <form action="#" method="POST">
            <div>
                <label for="">UserName</label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="number" name="phone">
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" name="add_student",value="Add Student">
            </div>
        </form>
    </div>
    </center>
   </div>
</body>
</html>