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


/**

 *	Atualizacao/Edicao de Cliente

 */

function edit() {



  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));



  if (isset($_GET['id'])) {



    $id = $_GET['id'];



    if (isset($_POST['fornecedor'])) {



      $fornecedor = $_POST['fornecedor'];

      $fornecedor['modified'] = $now->format("Y-m-d H:i:s");



      update('fornecedores', $id, $fornecedor);

      header('location: index.php');

    } else {



      global $customer;

      $customer = find('customers', $id);

    } 

  } else {

    header('location: index.php');

  }

}





?>