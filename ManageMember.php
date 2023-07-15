<html>
<head>
<title>MANAGE MEMBER DETAILS</title>

</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM  </FONT> </marquee> 
<center> <br/> 
<table border=0 bgcolor="99FFFF" align="center">

<tr> <td colspan=6> <center> <font size=6 color="#990066"> <b> <u> MANAGE MEMBER DETAILS </u> </b> </font> </center> <br/>
</td> 
</tr>
<body>
<form name="frm1" method="post" action="#">
<tr> <td> <font size="4"> BOOK  ID </font> </td> <td> <input type="text" name="t1" size="30" /> <br/> <br/> </td> </tr> 
<center> <tr> <td> <input type="submit" name="view" value="VIEW"/> <br/> </td> 
<td> <input type="submit" name="viewall" value="VIEW ALL"/> <br/> </td>
<td> <input type="submit" name="update" value="UPDATE"/> <br/> </td>
<td> <input type="submit" name="delete" value="DELETE"/> <br/> </td>
<td> <input type="reset" value="RESET"/> <br/> </td>

 </tr> </center> <br/> 
</form> <br/>
</center>
</TABLE>
<center><a href="login.php">HOME</a></center>
</body>


<?php
require_once("connect.php");

if(isset($_POST['view'])) 
{
   if(!empty($_POST))
   {
   $qry="select * from membermaster where mid='".$_POST['t1']."'";
   mysqli_select_db($con,"library") or die(mysql_error());
   $a=mysqli_query($con,$qry) or die(mysql_error());
   echo "<table border=1><tr>";
   echo "<td> MEMBER ID</td>";
   echo "<td> MEMBER NAME </td>";
   echo "<td> MEMBER MAIL ID </td>";
   echo "<td> MEMBER PHONENUMBER </td>";
   
   echo "</tr>";
   if($b=mysqli_fetch_assoc($a))
   {
   echo "<tr><td>".$b["mid"];
   echo "<td>".$b["mname"];
   echo "<td>".$b["mail_Id"];
   echo "<td>".$b["PhNum"]."</tr>";
   }
   else
   echo "Invalid Data";
   echo "</table>";
   }
}
if(isset($_POST['viewall'])) 
{
   
   $qry="select * from membermaster";
   mysqli_select_db($con,"library") or die(mysql_error());
   $a=mysqli_query($con,$qry) or die(mysql_error());
   echo "<table border=1><tr>";
   echo "<td> MEMBER ID</td>";
   echo "<td> MEMBER NAME </td>";
   echo "<td> MEMBER MAIL ID </td>";
   echo "<td> MEMBER PHONENUMBER </td>";
   echo "</tr>";
   //if($b=mysqli_fetch_assoc($a))
   if(mysqli_num_rows($a) > 0)
   {while ($b=$a->fetch_assoc()) 
   {
   echo "<tr><td>".$b["mid"];
   echo "<td>".$b["mname"];
   echo "<td>".$b["mail_Id"];
   echo "<td>".$b["PhNum"]."</tr>";
   }
   }
   else
   echo "Invalid Data";
   echo "</table>";
   
}


  









  
   if(isset($_POST['delete'])) 
   {if(!empty($_POST))
   {
   $qry="delete from membermaster where mid='".$_POST['t1']."'";
   mysqli_select_db($con,"library") or die(mysql_error());
   echo "<table border=1><tr>";
   if(mysqli_query($con,$qry))
   echo " The member with ID ".$_POST['t1']." is DELETED successfully";
   else
   echo "Invalid Data";
   }
    echo "</table>";
   }



?>
</html>
