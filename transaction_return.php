<html>
<head>
<?PHP
require_once("connect.php");
if(!empty($_POST))
{
$a=$_POST['bookid'];
$qry3="update bookmaster set copies=copies+1 where bid=$a" or die(mysql_error());

mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry3) or die(mysql_error());
$qry4="delete from transaction where bid=$a" or die(mysql_error());

mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry4) or die(mysql_error());
echo "<br/>";
echo '<script>alert("Book received successfully")</script>';
}
?>
<title>Book Return Form</title>
</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM </FONT> </marquee> 
<center><form method="POST" action="#">
<strong>BOOK ID</strong>
<?php 
$qry1="select * from transaction ORDER BY bid";
mysqli_select_db($con,"library") or die(mysql_error());
$a=mysqli_query($con,$qry1) or die(mysql_error());
echo "<select name='bookid' >";
while ($b=mysqli_fetch_array($a))
{echo "<option>";
echo $b['bid'];
echo "</option>";
}
echo "<br>"
?>
<br>
<input id="1" type="SUBMIT" name="issue" value="RETURN"></td>
<input id="2" type="reset" name="return" value="cancel"></td>
</form>
<br><br><a href="login.php">home</a></center>
</body>
</html>
