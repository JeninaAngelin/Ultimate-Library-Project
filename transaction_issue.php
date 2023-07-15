<html>
<head>
<?PHP
require_once("connect.php");
if(!empty($_POST))
{
$a=$_POST['bookid'];
$b=$_POST['memid'];
$qry="insert into transaction (bid,mid) values('$a','$b')" or die(mysql_error());

mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry) or die(mysql_error());
$qry1="update bookmaster set copies=copies-1 where bid=$a" or die(mysql_error());

mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry1) or die(mysql_error());
echo "<br/>";
echo '<script>alert("Book issued successfully")</script>';

}
?>
<title>Book Issue form</title>
</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM </FONT> </marquee> 
<center>
<form method="POST" action="#">
<strong>BOOK ID</strong>&nbsp&nbsp&nbsp
<?php 
$qry1="select * from bookmaster where copies>=1 ORDER BY bid";
mysqli_select_db($con,"library") or die(mysql_error());
$a=mysqli_query($con,$qry1) or die(mysql_error());
echo "<select name='bookid' >";
while ($b=mysqli_fetch_array($a))
{
echo "<option>";
echo $b['bid'];
echo "</option>";
}
echo "</select>";
echo "<DIV>";
echo "<strong><br>Member ID&nbsp</strong>";
$qry2="select * from membermaster ORDER BY mid";
$c=mysqli_query($con,$qry2) or die(mysql_error());
echo "<select name='memid' >";
while ($d=mysqli_fetch_array($c))
{
echo "<option>";
echo $d['mid']; 
echo "</option>";
}
echo "</select>";
echo "</DIV>";
?>
<br><br>
<input id="1" type="SUBMIT" name="issue" value="ISSUE"></td>
<input id="2" type="reset" name="return" value="cancel"></td>
</form>
<br><br><a href="login.php">home</a></center>
</body>
</html>
