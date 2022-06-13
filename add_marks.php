<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"sms");
$query = "insert into marks values($_POST[roll_no],$_POST[english],
$_POST[nepali],$_POST[science],$_POST[maths],
$_POST[social],$_POST[computer])";
$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Student added successfully.");
window.location.href = "admin_dashboard.php";
</script>

