<html>
<head>
<?PHP
require_once("connect.php");
if(!empty($_POST))
{
$a=$_POST['bid'];
$b=$_POST['bname'];
$c=$_POST['bauthor'];
$d=1;
$f=$_POST['price'];
$qry="insert into bookmaster (bid,bname,bauthor,copies,price) values('$a','$b','$c','$d','$f')" or die(mysql_error());
//echo $qry;
$db=mysqli_select_db($con,"library") or die(mysql_error());
mysqli_query($con,$qry) or die(mysql_error());
echo "<br/>";

echo '<script>alert("New Book added successfully")</script>';

}
?>
<title>BOOK MASTER FORM</title>
</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM </FONT> </marquee> 
 <center>  <br/> <br/> <br/> <br/> <br/> <br/>
<fieldset style="width:50%">
 <table border="0" bgcolor="99FFFF" align="center">
<tr> 
<td colspan=2>
<center><font size="+5" color="#990066"> <b> <u> BOOK MASTER  </u> </b> </font> </center> <br/>
</td> </tr> 
<table border="0">
<tr>
<form method="POST" action="#">
<tr>
<td><strong>BOOK ID</td></strong><td> <input type="text" name="bid"></td>
</tr>
<tr>
<td><strong>BOOK NAME</td></strong><td> <input type="text" name="bname"></td>
</tr>
<tr>
<td><strong>BOOK AUTHOR</td></strong><td> <input type="text" name="bauthor"></td>
</tr>
<tr>
<td><strong>PRICE</td></strong><td> <input type="text" name="price"></td>
</tr>
<tr>
<td><input id="button" type="SUBMIT" name="submit" value="ADD BOOK"></td>
<td><input id="button" type="SUBMIT" name="reset" value="RESET"></td>
</tr>
</form>
</table>
</fieldset>
<br><br>
<br><br><center><a href="login.php">HOME</a></center>
</body>
</html>
