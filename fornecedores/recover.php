<?php 

  require_once('functions.php'); 



  if (isset($_GET['id'])){

    recover($_GET['id']);

  } else {

    die("ERRO: ID não definido.");
	#header('location: index.php');
  }

?>