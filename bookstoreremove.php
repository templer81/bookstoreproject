<?php
$con = mysql_connect('localhost','root','');
if (!$con)
{
	die("Could not connect to database".mysql_error());
}
mysql_select_db('bookstore')or die('Cannot select database bookstore');
$wish = true;
echo $_POST['user'];
$isbn = $_POST['isbn'];
$usermail = $_POST['user'];
$inserter = "delete from wishlist where booknumber = '$isbn' and usermail = '$usermail'";
//echo "<p>".$inserter."</p>";
mysql_query($inserter)or die('Error submitting data: '.mysql_error());
mysql_close($con);
?>