<?php
$host="localhost";
$uname="root";
$pass="root";
$username = $_POST['username'];
$passwd = $_POST['passwd'];
session_start();
// connessione al db
$conn= mysqli_connect($host, "root", "", "vivariumware");
if (!($conn))
//if (mysqli_connect_errno($conn))
 {
 // windows.alert("errore connessione al database");
  die();
 }
// inserimento utente
$query = "SELECT * FROM utente WHERE username='$username' and passwd='$passwd';";

$res = mysqli_query($conn, $query);
$nr=mysqli_num_rows($res);
if ($nr == 1)
 {
//  session_start();
  $_SESSION['user']= $username;
  mysqli_free_result($res);
  mysqli_close($conn);
  header("Location: http://localhost/5IB/progetto/completo/login.php");
  exit;
 }
 else
 {
	 unset($_SESSION['user']);
  echo "Identificazione non riuscita ";
  mysqli_free_result($res);
  mysqli_close($conn);
  //echo "torna alla pagina di <a href=\"http://localhost/5IB/progetto/completo/login.html\">login</a>";
  header("Location: http://localhost/5IB/progetto/completo/login.php");
  exit;
 }


?>
