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

    $host="localhost";
    $user="root";
    $password="";
    $db="student_management";
    $data=mysqli_connect($host,$user,$password,$db);
    // $result=mysqli_query($data,$sql);
    // while($info=$result->fetch_assoc()){
        $id=$_GET['student_id'];
        $sql="SELECT * FROM user where id='$id'";
        $result=mysqli_query($data,$sql);
        $info=$result->fetch_assoc();
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
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
    <h1>Update Student</h1>
    <div class="div_design">
        <form action="#" method="POST">
            <div>
                <label action="#" method="POST">UserName</label>
                <input type="text" name="name" <?php
                echo " {$info['username']}"?>">
            </div>

            <div>
                <label for="">Email</label>
                <input type="phone" name="name" <?php
                echo " {$info['username']}"?>">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="number" name="phone" <?php
                echo " {$info['phone']}"?>">
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="name" <?php
                echo " {$info['password']}"?>">
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