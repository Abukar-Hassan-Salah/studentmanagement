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
$sql="SELECT * FROM user";
$result=mysqli_query($data,$sql);
?> 
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
<?php
include'admission_side_bar.php'
?>
   <div class="content">
    <center>
    <h1>Student Data</h1>
    <br><br>
    <table border="1px">
        <tr>
            <th style="padding:20px; font-size:15px;">Name</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Phone</th>
            <th style="padding:20px; font-size:15px;">Usertype</th>
            <th style="padding:20px; font-size:15px;">Password</th>
            <th style="padding:20px; font-size:15px;">Delete</th>
            <th style="padding:20px; font-size:15px;">Update</th>
            
        </tr>

        <?php
        while ($info = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td style="padding:20px; ">
            <?php echo "{$info['username']}";?>
        </td>
            <td style="padding:20px; ">
            <?php echo "{$info['email']}";?>
        </td>
            <td style="padding:20px; ">
            <?php echo "{$info['phone']}";?>
        </td>
            <td style="padding:20px; ">
            <?php echo "{$info['usertype']}";?>
        </td>
        </td>
            <td style="padding:20px; ">
            <?php echo "{$info['password']}";?>
        </td>

        </td>
            <td style="padding:20px; ">
            <?php echo "<a onClick=\"Javascript:return cofirm('Are You Sure To Delete This')\"
            class='btn btn-danger' 
            href='delete.php?student_id={$info['id']}'>Delete</a>"
            ?>
        </td>

        </td>
            <td style="padding:20px; ">
            <?php echo "<a class='btn btn-primary' href='update.php?student_id={$info['id']}'>Update</a>"
            ?>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
   </div>
</body>
</html>