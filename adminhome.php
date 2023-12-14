<!-- <?php
// session_start();
// session_destroy();
//     if(! isset($_SESSION['username']))
//     {
//         header("loction:login.php");
//     }
//     elseif($_SESSION['usertype']=='student'){
//         header("location:login.php");
//     }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <?php
    include 'admin_css.php';
    ?>

</head>
<body>
   <header class="header">
    <a href="">Admin Dashboard</a>
    <div class="logout">
        <a href="" class="btn btn-primary">Logout</a>
    </div>
   </header>
   <aside>
    <ul>
        <li>
            <a href="admission.php">Admission</a>
        </li>

        <li>
            <a href="">Add Student</a>
        </li>
        <li>
            <a href="">View Student</a>
        </li>

        <li>
            <a href="">Add Teacher</a>
        </li>

        <li>
            <a href="">View Teacher</a>
        </li>

        <li>
            <a href="">Add Courses</a>
        </li>

        <li>
            <a href="">View Courses</a>
        </li>
    </ul>
   </aside>
   <div class="content">
    <h1>Admission Dashboard</h1>
   </div>
</body>
</html>