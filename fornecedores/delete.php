
<?php 

  require_once('functions.php'); 



  if (isset($_GET['id'])){

    delete($_GET['id']);
	header('location: index.php');
  } else {

    die("ERRO: ID não definido.");
header('location: index.php');
  }
  
  

?>