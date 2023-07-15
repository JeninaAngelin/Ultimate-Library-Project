<html>
<head>
<title>View book avail</title>

</head>
<body> <marquee> <FONT SIZE="+6" COLOR="#0000CC"> LIBRARY MANAGEMENT SYSTEM  </FONT> </marquee> 
<center> <br/> 
<table border=0 bgcolor="99FFFF" align="center">

<tr> <td colspan=6> <center> <font size=6 color="#990066"> <b> <u> MANAGE BOOK DETAILS </u> </b> </font> </center> <br/>
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
   $qry="select * from bookmaster where bid='".$_POST['t1']."'";
   mysqli_select_db($con,"library") or die(mysql_error());
   $a=mysqli_query($con,$qry) or die(mysql_error());
   
   echo "<table border=1><tr>";
   echo "<td> bid</td>";
   echo "<td> bname </td>";
   echo "<td> bauthor </td>";
   echo "<td> BOOK STATUS </td>";
   echo "<td> price</td>";
   echo "</tr>";
   if($b=mysqli_fetch_assoc($a))
   {
   $book= $b["bid"]; 
   echo "<tr><td>".$b["bid"];
   echo "<td>".$b["bname"];
   echo "<td>".$b["bauthor"];
    $bookstatus=$b["copies"];
    if($bookstatus==0)
     {	$qry1="select mid from transaction where 'bid=$book'" ;
        //echo $qry1;
   	mysqli_select_db($con,"library") or die(mysql_error());
   	$x=mysqli_query($con,$qry1) or die(mysql_error());
        if($y=mysqli_fetch_assoc($x))
        echo "<td>".$y["mid"];
     }
     else
       echo "<td> Available In Library";
        
   // echo "<td>".$bookstatus;
   //echo "<td>".$b["copies"];
   echo "<td>".$b["price"]."</tr>";
   }
   else
   echo '<script>alert("ENTER A VALID BOOK ID AND THEN TRY")</script>';
   echo "</table>";
   }
}

if(isset($_POST['viewall'])) 
{
   
   $qry="select * from bookmaster";
   mysqli_select_db($con,"library") or die(mysql_error());
   $a=mysqli_query($con,$qry) or die(mysql_error());
   echo "<table border=1><tr>";
   echo "<td> bid</td>";
   echo "<td> bname </td>";
   echo "<td> bauthor </td>";
   echo "<td> BOOK STATUS </td>";
   echo "<td> price</td>";
   echo "</tr>";
   if(mysqli_num_rows($a) > 0)
   {while ($b=mysqli_fetch_array($a)) 
   {
   echo "<tr><td>".$b["bid"];
   echo "<td>".$b["bname"];
   echo "<td>".$b["bauthor"];
   echo "<td>".$b["copies"];
   echo "<td>".$b["price"]."</tr>";
   }
   }
   else
   echo '<script>alert("ENTER A VALID BOOK ID AND THEN TRY")</script>';
   echo "</table>";
   
}


  if(isset($_POST['update'])) 
  { if(!empty($_POST))
   {
   $qry="select * from bookmaster where bid='".$_POST['t1']."'";
   mysqli_select_db($con,"library") or die(mysql_error());
   $a=mysqli_query($con,$qry) or die(mysql_error());
   echo "<html>";
   echo	"<form name=frm2 method=post>";
   echo "<table border=1><tr>";
   echo "<td> bid</td>";
   echo "<td> bname </td>";
   echo "<td> bauthor </td>";
   echo "<td> price</td>";
   echo "</tr>";
   if($b=mysqli_fetch_assoc($a))
   {
   //$bookid=$b['bid'];
  
   //echo "<tr><td>".$b["bid"];
   echo "<tr><td> <input class='input' type='text' name='bid' value='{$b['bid']}' />";
   echo "<td> <input class='input' type='text' name='bname' value='{$b['bname']}' />";
   echo "<td> <input class='input' type='text' name='bauthor' value='{$b['bauthor']}' />";
   echo "<td> <input class='input' type='text' name='bprice' value='{$b['price']}' />";
   
   echo "<input class='submit' type='submit' name='submit' value='DONE' />";
   echo "</tr>";
   }
   else
   echo '<script>alert("ENTER A VALID BOOK ID AND THEN TRY")</script>';
   echo "</table>";
   echo "</form>";
   echo "</html>";
   }
}



if(isset($_POST['done'])) 
  { echo "hai";

if(!empty($_POST))
   {
      
	$bid = $_POST['bid'];
	$bname = $_POST['bname'];
	$bauthor = $_POST['bauthor'];
        $bprice=$_POST['bprice'];
	if(empty($bid) || empty($bname) || empty($bauthor) || empty($bprice)) 
        {
			
		if(empty($bid)) 
		{
		echo '<font color="red">Name field is empty.</font><br>';
		}
		
		if(empty($bname)) 
		{
		echo '<font color="red">Age field is empty.</font><br>';
		}
		if(empty($bauthor)) 
		{
		echo '<font color="red">Email field is empty.</font><br>';
		}
		if(empty($bprice)) 
		{
		echo '<font color="red">Email field is empty.</font><br>';
		}
	} 
	else 
        { 
		$result = "update bookmaster SET bname='$bname',bauthor='$bauthor', price=$price WHERE bid=$bid";
		mysqli_query($con,$result);
		echo '<font color="green">Data added successfully.</font>';
		
	}
}
}




  
   if(isset($_POST['delete'])) 
   {if(!empty($_POST))
   {
   $qry="delete from bookmaster where bid='".$_POST['t1']."'";
   mysqli_select_db($con,"library") or die(mysql_error());
   echo "<table border=1><tr>";
   if(mysqli_query($con,$qry))
   echo " The book with ID ".$_POST['t1']." is DELETED successfully";
   else
   echo '<script>alert("ENTER A VALID BOOK ID AND THEN TRY")</script>';
   }
    echo "</table>";
   }



?>
</html>
