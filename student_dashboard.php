<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Student Dashboard</title>
	<link rel="stylesheet" href="css/styles-admin.css" >
	
    
	<?php
		session_start();
		
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
        
	?>

</head>
<body>
    <div id="header">
        Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;
		</center>
	</div>
<div id="left_side">
<strong><h2>Student Management System</h2></strong>
	<strong><h3>Dashboard</h3></strong>
	<div id="left_side_cont">
    <form action="" method="post">
	<center>
        <table>
			
            <tr>
                <td>
                    <input type="submit" name="show_detail" value="Show  Details"> 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="edit_detail" value="Edit Details"> 
                </td>
            </tr>
			<tr>
                <td>
                    <input type="submit" name="show_attendance" value="Show Attendance"> 
                </td>
            </tr>
			<tr>
                <td>
                    <input type="submit" name="show_marks" value="Show Marks"> 
                </td>
            </tr>
			
        </table>
		</center>
    </form>
	</div>
</div>
<div id="right_side"><br><br>
<centre>
<div id="demo">
    <?php 
    if(isset($_POST['show_detail'])){
        $query = "select * from students where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) 
        {
		?>
        <table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Phone:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['phone']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					
				</table>
				<?php
				}	
			}
			?>
			
			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="phone" value="<?php echo $row['phone']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
			<?php
				}	
			}
			?>
			<?php
				if(isset($_POST['show_attendance']))
				{
					?>
					<center>
						<h4>Attendance</h4>
					</center>

					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					$query1 = "select * from students where email = '$_SESSION[email]'";
					$query_run1 = mysqli_query($connection,$query1);
					$row1 = mysqli_fetch_assoc($query_run1);
					echo "<table style='width: 100%; border-collapse: collapse;'>
							<thead>
							<tr>
								<td id='id'><b>Roll NO.</b></td>
								<td id='id'><b>Name</b></td>
								<td id='id'><b>Class</b></td>
								<td id='id'><b>Total Days</b></td>
								<td id='id'><b>Present Days</b></td>
							</tr>
							</thead>";
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
							if($row['roll_no']==$row1['roll_no'])
							{
							echo"<tr>";
							echo"<td id='id'>" .$row['roll_no']."</td>";
							echo"<td id='id'>" .$row['name']. "</td>";
							echo"<td id='id'>" .$row['class']. "</td>";
							echo"<td id='id'>100</td>";
							echo"<td id='id'>" .$row['attendance']. "</td>";
							echo"</tr>";
							}
							
					}
					echo "</table>";
				}
			?>
			<?php
				if(isset($_POST['show_marks']))
				{
					?>
					<center>
						<h4>Marks</h4>
					</center>

					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					$connection1 = mysqli_connect("localhost","root","");
					$db1 = mysqli_select_db($connection1,"sms");
					$query1 = "select * from marks";
					$query_run1 = mysqli_query($connection1,$query1);
					$row1 = mysqli_fetch_assoc($query_run1);
					$query2 = "select * from students where email = '$_SESSION[email]'";
					$query_run2 = mysqli_query($connection,$query2);
					$row2 = mysqli_fetch_assoc($query_run2);
					
					
					echo "<table style='width: 100%; border-collapse: collapse;'>
							<thead>
							<tr>
								<td id='id'><b>Roll NO.</b></td>
								<td id='id'><b>Class</b></td>
								<td id='id'><b>Name</b></td>
								<td id='id'><b>English</b></td>
								<td id='id'><b>Nepali</b></td>
								<td id='id'><b>Science</b></td>
								<td id='id'><b>Maths</b></td>
								<td id='id'><b>Social</b></td>
								<td id='id'><b>Computer</b></td>
								<td id='id'><b>Result</b></td>
							</tr>
							</thead>";
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						if($row['s_no']==$row1['s_no'])
						{
						if($row['roll_no']==$row2['roll_no'])
						
							{echo"<tr>";
							echo"<td id='id'>" .$row['roll_no']."</td>";
							echo"<td id='id'>" .$row['class']. "</td>";
							echo"<td id='id'>" .$row['name']. "</td>";
							echo"<td id='id'>" .$row1['english']."</td>";
							echo"<td id='id'>" .$row1['nepali']. "</td>";
							echo"<td id='id'>" .$row1['science']. "</td>";
							echo"<td id='id'>" .$row1['math']. "</td>";
							echo"<td id='id'>" .$row1['social']. "</td>";
							echo"<td id='id'>" .$row1['computer']. "</td>";
							echo"<td id='id'>";
							if($row1['computer']< "35" || $row1['english']<"35" || $row1['nepali']<"35" || $row1['science']<"35" || $row1['math']<"35" || $row1['social']< "35" || $row1['computer']<"35")
							{
								echo "<a style='color:red;'>Fail</a>";
							}
							else{
								
								echo"<a style='color:green;'>Pass</a>";
							}
							echo"</td>";
							}
							$row1 = mysqli_fetch_assoc($query_run1);}
						else
						{echo "<td id='id'> sn no doesnt match </td>";}
						echo"</tr>";
						
						
					}


					echo "</table>";
				}
			?>
		</div>
		</centre>
	</div>
	
</body>
</html>