<?php 
include('pdo.php');
$pdo = ( new MySQLConnection() )->connect();
if($pdo === null) {
   print "Could not connect to DB";
} else {
   print "DB connection successful";
}
?>
<br>
