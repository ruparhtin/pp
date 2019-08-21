<html>
<head>
<title>Update Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form name="frmUser" method="post" action="Admin_Update1.php">

   
   <table border="0" cellpadding="10" cellspacing="1" 
     width="500" align="center">
	 <tr class="tableheader">
	 <td align="center" colspan="2">Updating Form</td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">New ID</td>
	 <td> <input type="text" name="txtID"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">New Brand</td>
	 <td><input type="password" name="txtBrand"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right"> New Type</td>
	 <td><input type="email" name="txtType"></td>
	 </tr>
	 
	  <tr class="tablerow">
	 <td align="right"> New Price</td>
	 <td><input type="email" name="txtPrice"></td>
	 </tr>
	 <tr class="tableheader">
	 <td align="center" colspan="2"> 
	 <input type="submit" name="submit" value="Update" ></td>
	 </tr>
	 </table>
	 </form>
	 </body>
	 </html>
	 
	 <?php
	 $username='root';
    $password='';
     $dbname='makeupdb';
   $tblname='makeuptbl';
   $host='localhost';


   $connecDB=mysqli_connect($host,$username,$password,$dbname)
   or die('could not connect to database');
	
	 $NEWID=$_POST['txtID'];
	 $NEWBRAND=$_POST['txtBrand'];
	 $NEWTYPE=$_POST['txtType'];
	 $NEWPRICE=$_POST['txtPrice'];
	 $result=mysqli_query($connecDB,"Update $tblname Set id='$NEWID' and
	               brand='$NEWBRAND' and type='$NEWTYPE' and price='$NEWPRICE'")or die("cannot connect");
	 if($result){
		 echo"Successful Update"."<br>";
		 echo "header('Location:adminLogout.php')";
	 }
	 ?>
	 
	 
	 
	 