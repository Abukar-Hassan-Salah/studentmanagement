
<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">SSD SCHOOL</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">

    <label class="img_text">We Teach Students With Care</label>
        <img class="main_img" src="school_management.jpeg" alt="this school management images">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="Welcome_img" src="school2.jpeg" alt="">

            </div>
            <div class="col-md-8">
                <h1>Welcome To SSD School</h1>
                <p>
                At SSD School, we believe in providing a nurturing and inclusive educational environment that fosters the growth and development of every student. We are dedicated to cultivating a love for learning, promoting critical thinking, and empowering our students to reach their full potential.

                Our experienced and passionate faculty members are committed to delivering high-quality education that integrates academic excellence with character development. We strive to create a supportive community where students feel valued, respected, and inspired to explore their interests and talents.
                Our comprehensive curriculum is designed to provide a well-rounded education, encompassing core subjects, arts, sports, and extracurricular activities. We encourage creativity, collaboration, and independent thinking, preparing our students to become lifelong learners and responsible global citizens.
                </p>

            </div>
        </div>

    </div>
    <center>
        <h1>Our Teachers</h1>

    </center>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="teacher 1.jpeg" alt="teacher 1 img">
                <br>

                <p>
                Mr. Abukar Hassan is a dedicated and passionate English Language Arts teacher at SSD School. 
                With a deep love for literature and language, she strives to ignite the same passion in her students. 
                Mr. Abukar creates a dynamic and engaging classroom environment, where students explore various literary works, develop their writing skills, and engage in thoughtful discussions.
                </p>

            </div>
            <div class="col-md-4">
            <img class="teacher" src="teacher2.jpeg" alt="teacher 2 img">
            <p>
            Mr. Ali Omar  is an experienced Mathematics teacher at SSD School. With a strong foundation in mathematical concepts and a knack for making complex ideas accessible, he helps students develop a solid understanding of mathematics. 
            Mr. Ali employs innovative teaching strategies and real-world examples to demonstrate the relevance of mathematics in everyday life. 
            

            </div>
            <div class="col-md-4">
            <img class="teacher" src="teacher3.jpeg" alt="teacher 3 img">
            <p>
            Mrs. Abdiqadir Hilowle is a passionate Science teacher who sparks curiosity and fosters a love for scientific inquiry among her students at SSD School. 
            With a hands-on approach, she encourages students to explore the wonders of the natural world through exciting experiments and interactive activities. Mrs. Collins believes in making science accessible and relevant to students' lives.
            </p>

            </div>

        </div>
        <center>
        <h1>Our Courses</h1>

    </center>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="web_design.jpeg" alt="web design img">
                <br>
                <h3>web designign</h3>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="marketing.png" alt="martketingimg">
           <h3>Degital Marketing</h3>
            

            </div>
            <div class="col-md-4">
            <img class="teacher" src="graphic.jpeg" alt="Graphic design img">
            <h3>Graphic Designing</h3>

            </div>

        </div>

    </div>

    <center>
        <h1 class="adm" >Admission Form</h1>
    
        <div class="center" class="admission_form">
            <form action="data_check.php" method="POST">
                <div class="admi_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg"  type="text" name="name">
                </div>

                <div class="admi_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg"  type="text" name="email">
                </div>

                <div class="admi_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>

                <div class="admi_int">
                    <label class="label_text">Message</label>
                    <textarea class="input_txt" name="message"></textarea>
                </div>

                <div class="admi_int">
                <input class="btn btn-primary" id="submit" type="submit" value="apply"name="apply">
                </div>
            </form>
            </center>
        </div>

        <footer>
            <h3 class="footer_text">All @copyright reserved by SSD School</h3>
        </footer>
   
</body>
</html>