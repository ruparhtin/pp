<html>
<head>
<title>Inserting</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form name="frmUser" method="post" action="">

   
   <table border="0" cellpadding="10" cellspacing="1" 
     width="500" align="center">
	 <tr class="tableheader">
	 <td align="center" colspan="2">Inserting new items</td>
	 </tr>
	 
	 <tr class="tablerow">
	 <td align="right">ID:</td>
	 <td> <input type="text" name="id"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Brand:</td>
	 <td> <input type="text" name="brand"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Type:</td>
	 <td><input type="text" name="type"></td>
	 </tr>
	 <tr class="tablerow">
	 <td align="right">Price</td>
	 <td><input type="text" name="price"></td>
	 </tr>
	 <tr class="tableheader">
	 <td align="center" colspan="2"> 
	 <input type="submit" name="submit" value="Insert" ></td>
	 
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
   
     $ID=$_POST['id'];

	 $BRAND=$_POST['brand'];
	 $TYPE=$_POST['type'];
	 $PRICE=$_POST['price'];
	 $result=mysqli_query($connecDB,"Insert into $tblname(id,brand,price,type)values
	 ($ID,'$BRAND','$PRICE','$TYPE')or die("cannot connect");
	 if($result){
		 echo"Successful inserting"."<br>";
		 echo "header('Location:adminLogout.php')";
	 }
	 ?>
	 
	 
	 
	 