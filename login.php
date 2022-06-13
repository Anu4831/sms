<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
    <center><br><br>
    <h1> Student Management System</h1> <br>
    <form action="" method="POST">
    <!--  <input type="submit" name="admin_login" value="Admin Login">
        <input type="submit" name="student_login" value="Student Login">  -->
        <button class="button-rgb" role="button" name="admin_login" type="submit">Admin Login</button>
        
        <button class="button-rgb" role="button" name="student_login" type="submit">Student Login</button>
    </form>
    <?php
        if(isset($_POST['admin_login'])){
            header("Location: admin_login.php");
            
        }
        if(isset($_POST['student_login'])){
            header("Location: student_login.php");
            
        }
    ?>
    </center>
    
    
</body>
</html>