<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Login </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <style>
        body{
            margin: 0 auto;
            background-image: url("image/admin-background.jpg");
            background-repeat: no-repeat;
            background-size: 100% 720px;
        }

        .container{
            width: 20%;
            height: 25%;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(220, 222, 244, 0.2);
            margin-top: 8%;

        }

        .container img{
            width: 70px;
            height: 70px;
            margin-top: -60px;
        }

        input[type="text"],input[type="password"]{
            margin-top: 10px;
            height: 25px;
            width: 180px;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: #fff;
            padding-left: 40px;
        }

        .form-input::before{
            content: "\f007";
            font-family: "FontAwesome";
            padding-left: 10px;
            padding-top: 12px;
            position: absolute;
            font-size: 25px;
            color: #2980b9; 
        }

        .form-input:nth-child(2)::before{
            content: "\f023";
        }

        .btn-login{
            padding: 10px 20px;
            border: none;
            background-color: #27ae60;
            color: #fff;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .outcome{
            padding: 10px 20px;
            margin-top: 4px;
            font-family: "FontAwesome";
            text-align: center;
            font-size: 18px;
            color: white;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
            height: 2%;
            background: transparent;
        }
</style>
<div class="container">
	<img src="image/login.jpg"/>
    <h2>Admin Login Page</h2><br>
		<form action="" method="post">
			<div class="form-input">
				<input type="text" name="email" placeholder="email" required/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password" required />
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
</div>
    
<!--
    <center><br><br>
		<h3>Admin LogIn Page</h3><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
-->
<div class="outcome">
    <?php
        session_start();
        

        if(isset($_POST['submit'])){
            $conn = mysqli_connect("localhost","root","");
            $db= mysqli_select_db($conn,"sms");
            
            // $query = "select * from login where email = '$_POST[email]'";
            $query = "select * from login";
            $query_run = mysqli_query($conn,$query);
            $i=1;
            while($row = mysqli_fetch_assoc($query_run))
            {
                if($row['email']==$_POST['email'] && $row['password' ]==$_POST['password'])
                {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] =$row['name'];
                    header("Location: admin_dashboard.php");
                }
                else
                {
                    if($i==1)
                    {
                        echo "Email and Password doesnt match";
                        $i=0;
                    }
                }
              
            }
        }
    ?>
</div>

    </center>
    
    
    
</body>
</html>