<?php


require_once('../inc/database.php');

function save_forn($tableF = null, $tableA = null, $fornecedor = null, $endereco = null)
{
	$database = open_database();
	$result = null;
	$columns = null;
	$values = null;
	
	$fornecedor['ativo'] = true;
	foreach ($fornecedor as $key => $value) {

    $columns .= trim($key, "'") . ",";

    $values .= "'$value',";

  }
  
  $columns = rtrim($columns, ',');

  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $tableF . "($columns)" . " VALUES " . "($values);";
  
  $pk_forn = null;
  
   try {

    $database->query($sql);

	$result = $database->query("Select id from fornecedores order by id desc limit 1;");
	
	if ($result->num_rows > 0) 
	{

	      $pk_forn = $result->fetch_assoc();

	}
	

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';

    $_SESSION['type'] = 'success';

	
	
	save_address($pk_forn, $endereco, $database, $tableA);
  

  } catch (Exception $e) { 

  

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.' . $e;

    $_SESSION['type'] = 'danger';

  } 



  close_database($database);

  
  
}


function save_address($pk_forn = null, $endereco = null, $bd =null, $tableA = null)
{
	$columns = null;
	$values = null;
	
	#$endereco['fk_forn'] = $pk_forn;
	
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