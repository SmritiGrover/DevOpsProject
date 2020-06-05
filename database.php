<?php
$servername='192.168.1.203';
$username='root';
$password='sqladmin';
$dbname = "czentrix_campaign_manager";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
