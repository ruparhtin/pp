<?php
$username='root';
$password='';
$dbname='makeupdb';
$tblname='makeuptbl';
$host='localhost';
#comment;
$connecDB=mysqli_connect($host,$username,$password,$dbname)
or die('could not connect to database');
?>