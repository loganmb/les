<?php


require_once('../inc/database.php');

function save_forn($tableF = null, $tableA = null, $fornecedor = null, $endereco = null)
{
	$database = open_database();
	
	$columns = null;
	$values = null;
	
	foreach ($fornecedor as $key => $value) {

    $columns .= trim($key, "'") . ",";

    $values .= "'$value',";

  }
  
  $columns = rtrim($columns, ',');

  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $tableF . "($columns)" . " VALUES " . "($values) returning pk_forn;";
  
  $pk_forn = null;
  
   try {

    $pk_forn = $database->query($sql);

	

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';

    $_SESSION['type'] = 'success';

	save_address($pk_forn, $endereco, $database, $tableA);
  

  } catch (Exception $e) { 

  

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';

    $_SESSION['type'] = 'danger';

  } 



  close_database($database);

  
  
}


function save_address($pk_forn = null, $endereco = null, $bd =null, $tableA = null)
{
	$columns = null;
	$values = null;
	
	$endereco['fk_forn'] = $pk_forn;
	
	foreach ($endereco as $key => $value) {

    $columns .= trim($key, "'") . ",";

    $values .= "'$value',";

  }
  
  $columns = rtrim($columns, ',');

  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $tableA . "($columns)" . " VALUES " . "($values);";
  
  $bd->query($sql);
	
}


?>