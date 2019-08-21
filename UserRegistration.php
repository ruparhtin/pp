<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form name="frmUser" method="post" action="">

   
   <table border="0" cellpadding="10" cellspacing="1" 
     width="500" align="center">
	 <tr class="tableheader">
	 <td align="center" colspan="2">User Registration Form</td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Username</td>
	 <td> <input type="text" name="userName"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Password</td>
	 <td><input type="password" name="password"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Email</td>
	 <td><input type="email" name="email"></td>
	 </tr>
	 <tr class="tableheader">
	 <td align="center" colspan="2"> 
	 <input type="submit" name="submit" value="Login" ></td>
	 </tr>
	 
	 </table>
	 
	 </form>
	 </body>
	 </html>
	 
	 <?php
	 
session_start();

if(count($_POST)>0){
	
	$username='root';
    $password='';
     $dbname='makeupdb';
   $tblname='updateprofiletbl';
   $host='localhost';


   $connecDB=mysqli_connect($host,$username,$password,$dbname)
   or die('could not connect to database');
	
	 $NAME=$_POST['userName'];
	 $EMAIL=$_POST['email'];
	 $PASSWORD=$_POST['password'];
	 $result=mysqli_query($connecDB,"insert into $tblname values (
	 '$NAME' ,'$EMAIL' ,'$PASSWORD'")
	 or die("cannot connect");
	 if($result){
		 echo "Successful"."<br>";
		 echo "header('Location:Process.php')";
	 }
	 
}

 ?>
  
	 