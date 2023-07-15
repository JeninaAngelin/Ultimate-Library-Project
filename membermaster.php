<html>
<head>
<?PHP
require_once("connect.php");
if(!empty($_POST))
{
$a=$_POST['mid'];
$b=$_POST['mname'];
$c=$_POST['mail_Id'];
$d=$_POST['PhNum'];
$qry="insert into membermaster (mid,mname,mail_Id,PhNum) values('$a','$b','$c','$d')" or die(mysql_error());
//echo $qry;
mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry) or die(mysql_error());
echo "<br/>";
echo '<script>alert("Member added successfully")</script>';
}
?>
<title>member master form</title>
</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM </FONT> </marquee> 
 <center>  <br/> <br/> <br/> <br/> <br/> <br/>
<fieldset style="width:50%">
 <table border="0" bgcolor="99FFFF" align="center">
<tr> 
<td colspan=2>
<center><font size="+5" color="#990066"> <b> <u> MEMBER MASTER FORM </u> </b> </font> </center> <br/>
</td> </tr> 
<table border="0">
<tr>
<form method="POST" action="#">
<tr>
<td><strong>MEMBER ID</td></strong><td> <input type="text" name="mid"></td>
</tr>
<tr>
<td><strong>MEMBER NAME</td></strong><td> <input type="text" name="mname"></td>
</tr>
<tr>
<td><strong>MAIL ID</td></strong><td> <input type="text" name="mail_Id"></td>
<tr>
<td><strong>PHONE NUMBER</td></strong><td> <input type="text" name="PhNum"></td>
</tr>
<tr>
<td><input id="button" type="SUBMIT" name="submit" value="ADD MEMBER"></td>
<td><input id="button" type="SUBMIT" name="reset" value="RESET"></td>
</tr>
</form>
</table>
</fieldset>
<br><br><center><a href="login.php">HOME</a></center>
</body>
</html>
