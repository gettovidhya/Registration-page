<?php
$mysql_hostname = "localhost";
$mysql_user = "csefederation";
$mysql_password = "THEcseteam007";
$mysql_database = "perspica";
$prefix = "";
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $con) or die("Could not select database");


$name= isset($_POST['name'])?$_POST['name']:'';
$email= isset($_POST['email'])?$_POST['email']:'';
$cno= isset($_POST['cno'])?$_POST['cno']:'';
$coll= isset($_POST['coll'])?$_POST['coll']:'';
$dept= isset($_POST['dept'])?$_POST['dept']:'';
$gender=isset($_POST['gender'])?$_POST['gender']:'';
$year= isset($_POST['year'])?$_POST['year']:'';
$paper=isset($_POST['paper'])?$_POST['paper']:'';
$click=isset($_POST['click'])?$_POST['click']:'';
$design=isset($_POST['design'])?$_POST['design']:'';
$code=isset($_POST['code'])?$_POST['code']:'';
$bigb=isset($_POST['bigb'])?$_POST['bigb']:'';
$hide=isset($_POST['hide'])?$_POST['hide']:'';

mysql_query("INSERT INTO register(name,email,cno,coll,dept,gender,year,paper,click,design,code,bigb,hide) VALUES('$name','$email','$cno','$coll','$dept','$gender','$year','$paper','$click','$design','$code','$bigb','$hide')");





mysql_close($con);

?>
<script>
location.replace("../index.html");
alert("Successfully registered"); 

 </script>  



