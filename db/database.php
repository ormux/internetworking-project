<?php include('db/pdo.php');
$pdo = ( new MySQLConnection() )->connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($pdo === null) {
   print "Could not connect to DB";
} else {
   print "DB connection successful";
}
?>
<br>
