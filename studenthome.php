<?php
session_start();
session_destroy();
if(!isset($_SESSION['username']))
    {
        header("loction:login.php");
    }    
    elseif($_SESSION['usertype']=='admin'){
        header("location:login.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin.css">
   

</head>
<body>
    
   <header class="header">
    <a href="">Student Dashboard</a>
    <div class="logout">
        <a href="" class="btn btn-primary">Logout</a>
    </div>
   </header>
   <aside>
    <ul>
    <li>
            <a href="student_profile.php">My Profile</a>
        </li>
        <li>
            <a href="">My Courses</a>
        </li>

        <li>
            <a href="">My Result</a>
        </li>
    </ul>
   </aside>
  
</body>
</html>