<?php



require_once('../config.php');

require_once('../inc/database.php');

require_once(DBAPI);



$fornecedores = null;

$fornecedor = null;


/**

 *  Listagem de Clientes

 */

function index() {

	global $fornecedores;

	$fornecedores = find_all('fornecedores');

}




/**

 *  Cadastro de Clientes

 */

function add() {



  if ((!empty($_POST['fornecedor']))) {

    

    $today = 

      date_create('now', new DateTimeZone('America/Sao_Paulo'));



    $fornecedor = $_POST['fornecedor'];
	
    $fornecedor['modified'] = $today->format("Y/m/d");
	$fornecedor['ativo'] = true;
    

	save('fornecedores', $fornecedor);
	
	

    header('location: index.php');

  }

}





?>