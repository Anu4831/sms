<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"sms");
$query = "update students set name='$_POST[name]',class=$_POST[class],phone='$_POST[phone]',email='$_POST[email]',password='$_POST[password]' where roll_no=$_POST[roll_no]";
$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
    alert("Details Edited succesfully");
    window.location.href = "student_dashboard.php";
</script>