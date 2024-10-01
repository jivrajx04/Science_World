<?php
$u2=$_POST['uname'];
$p2=$_POST['psw'];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("tybca",$con);
$q=mysql_query("Select * from user where Username='$u2' and Password='$p2'");
$cout=mysql_num_rows($q);
if($cout>0)
{
   
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('login Successefully')
    window.location.href='index.php';
    </SCRIPT>");
 

}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('invalid credentials')
    window.location.href='index.php';
    </SCRIPT>");

}
mysql_close();
?>