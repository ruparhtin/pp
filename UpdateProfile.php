<html>
<head>
<title>Update Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form name="frmUser" method="post" action="">

   
   <table border="0" cellpadding="10" cellspacing="1" 
     width="500" align="center">
	 <tr class="tableheader">
	 <td align="center" colspan="2">Updating Form</td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">New Username</td>
	 <td> <input type="text" name="txtuserName"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">New Password</td>
	 <td><input type="password" name="txtpassword"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right"> New Email</td>
	 <td><input type="email" name="txtemail"></td>
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
   $tblname='updateprofiletbl';
   $host='localhost';


   $connecDB=mysqli_connect($host,$username,$password,$dbname)
   or die('could not connect to database');
	
	 $NEWNAME=$_POST['txtuserName'];
	 $NEWEMAIL=$_POST['txtemail'];
	 $NEWPASSWORD=$_POST['txtpassword'];
	 $result=mysqli_query($connecDB,"Update $tblname Set username='$NEWNAME' and
	               password='$NEWPASSWORD' and email='$NEWEMAIL'")or die("cannot connect");
	 if($result){
		 echo"Successful Update"."<br>";
		 echo "header('Location:Process.php')";
	 }
	 ?>
	 
	 
	 
	 