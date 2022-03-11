<?php
$host="localhost";
$uname="root";
$pass="root";
$utente = $_POST['nome'];
$passwd = $_POST['passwd'];
//session_start();
// connessione al db 
$conn= mysqli_connect($host, "root", "root", "5IB");

if (mysqli_connect_errno($conn))
 { 
 // windows.alert("errore connessione al database");
  die(); 
 }
// inserimento utente
$query = "INSERT INTO UTENTI  (nome,passwd) VALUES ('$utente','$passwd');";

$res = mysqli_query($conn, $query);
if (!$res)
 { 
 //echo ("<script language='javascript'>
 //            window.alert('Error saving record.')
  //           window.location.href='javascript:history.back()'
	//		 window.location.href='errore.html'
  //         </script>");


  echo("errore nell'nsert dell'utente nel database");
  
  mysqli_free_result($res);
  mysqli_close($conn);
  header("Location: http://localhost/5IB/progetto/completo/registra.html");
  die();
 }
 else
 {
 // echo "Utente inserito correttamente";
  mysqli_free_result($res);
  mysqli_close($conn);
  header("Location: http://localhost/5IB/progetto/completo/login.html");
  exit;
 }


?>

