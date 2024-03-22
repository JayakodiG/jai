<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["e"];

$con=mysql_connect("localhost","root","");
mysql_select_db("lovepuppy");
mysql_query("insert into class(n,a,e) values('$a','$b','$c')");
echo("Registered");
mysql_close($con);

?>