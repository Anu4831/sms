<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Dashboard</title>
	<link rel="stylesheet" href="css/styles-admin.css" >
    

	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
        
	?>

</head>
<body>
    <div id="header">
		
   <!-- <strong > Student Management System  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> -->
	
        Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;
		
		
	</div>
<div id="left_side">
<strong><h2>Student Management System</h2></strong>
	<strong><h3>Dashboard</h3></strong>
	<div id="left_side_cont">
    <form action="" method="post">
		<center>
        <table><br><br>
            <tr>
                <td>
                    <input type="submit" name="search_student" value="Search Student"> <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="edit_student" value="Edit Student"> <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="add_new_student" value="Add New Student"> <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="delete_student" value="Delete Student"> <br><br>
                </td>
            </tr>
            <tr>
					<td>
						<input type="submit" name="show teachers" value="Show Teachers"><br><br>
					</td>
				</tr>
			<tr>
				<td>
					<input type="submit" name="show attendance" value="Show Attendance"><br><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="show marks" value="Show Marks"><br><br>
				</td>
			</tr>
        </table>
		</center>
    </form>
	</div>
</div>
<div id="right_side"><br><br>
<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
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
							<tr>
								<td>
									<b>Attendance:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['attendance']?>" disabled>
								</td>
							</tr>
							
						</table>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
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
								<b>Phone:</b>
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
						<tr>
							<td>
								<b>Attendance:</b>
							</td> 
							<td>
								<input type="number" name="attendance" value="<?php echo $row['attendance']?>">
							</td>
						</tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="number" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="number" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Phone:</b>
							</td> 
							<td>
								<input type="number" name="phone" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="email" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Attendance:</b>
							</td> 
							<td>
								<input type="number" value="0" name="attendance" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>

			<?php
				if(isset($_POST['show_teachers']))
				{
					?>
					<center>
						<h4>Teacher's Details</h4>
					</center>

					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					echo "<table style='width: 100%; border-collapse: collapse;'>
							<thead>
							<tr>
								<td id='id'><b>ID</b></td>
								<td id='id'><b>Name</b></td>
								<td id='id'><b>Mobile</b></td>
								<td id='id'><b>Courses</b></td>
								<td id='id'><b>View Detail</b></td>
							</tr>
							</thead>";
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
							echo"<tr>";
							echo"<td id='id'>" .$row['t_id']."</td>";
							echo"<td id='id'>" .$row['name']. "</td>";
							echo"<td id='id'>" .$row['mobile']. "</td>";
							echo"<td id='id'>" .$row['courses']. "</td>";
							echo"<td id='id'> <a href='#'>View</a></td>";
							echo"</tr>";
					}
					echo "</table>";
				}
			?>
			<?php
				if(isset($_POST['show_attendance']))
				{
					?>
					<center>
						<h4>Students Attendance</h4>
					</center>

					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
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
							echo"<tr>";
							echo"<td id='id'>" .$row['roll_no']."</td>";
							echo"<td id='id'>" .$row['name']. "</td>";
							echo"<td id='id'>" .$row['class']. "</td>";
							echo"<td id='id'>100</td>";
							echo"<td id='id'>" .$row['attendance']. "</td>";
							echo"</tr>";
					}
					echo "</table>";
				}
			?>
			<?php
				if(isset($_POST['show_marks']))
				{
					?>
					<center>
						<h4>Students Marks</h4>
					</center>
					<div id="left_side_cont">
						<form action="" method="post">
							<table>
								<tr>
									<td>
										<input type="submit" name="add_new_marks" value="Add New Marks"> <br><br>
									</td>
									<td>
										<input type="submit" name="edit_marks" value="Edit Marks"> <br><br>
									</td>
								</tr>
							</table>
						
						</form>
						</div>
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
							$row1 = mysqli_fetch_assoc($query_run1);
							}
						else
						{echo "<td id='id'> student/marks is not added. </td>";}
						echo"</tr>";
					}


					echo "</table>";
				}
			?>
			<?php 
				if(isset($_POST['add_new_marks'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_marks.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="number" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>English:</b>
							</td> 
							<td>
								<input type="number" name="english" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Nepali:</b>
							</td> 
							<td>
								<input type="number" name="nepali" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Science:</b>
							</td> 
							<td>
								<input type="number" name="science" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Maths:</b>
							</td> 
							<td>
								<input type="number" name="maths" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Social:</b>
							</td> 
							<td>
								<input type="number" name="social" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Computer:</b>
							</td> 
							<td>
								<input type="number" name="computer" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Marks"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
		</div>
	</div>
</body>
</html>