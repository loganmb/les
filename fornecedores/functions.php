<?php



require_once('../config.php');

require_once('../inc/database.php');

require_once(DBAPI);



$fornecedores = null;

$fornecedor = null;


/**

 *  Listagem de Fornecedores

 */

function index() {

	global $fornecedores;

	$fornecedores = find_all('fornecedores');

}


/**

 *  Visualização de um Fornecedor

 */

function view($id = null) {

  global $fornecedor;

  $fornecedor = find('fornecedores', $id);

}

/**

 *  Cadastro de Fornecedores

 */

function add() {



  if ((!empty($_POST['fornecedor']))) {

    

    $today = 

      date_create('now', new DateTimeZone('America/Sao_Paulo'));



    $fornecedor = $_POST['fornecedor'];
	
    $fornecedor['modified'] = $today->format("Y-m-d");
	$fornecedor['ativo'] = true;
    

	save('fornecedores', $fornecedor);
	
	

    header('location: index.php');

  }


}


/**

 *	Atualizacao/Edicao de Fornecedor

 */

function edit() {



  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));



  if (isset($_GET['id'])) {


	
    $id = $_GET['id'];



    if (isset($_POST['fornecedor'])) {



      $fornecedor = $_POST['fornecedor'];

      $fornecedor['modified'] = $now->format("Y-m-d");



      update('fornecedores', $id, $fornecedor);

      header('location: index.php');

    } else {



      global $fornecedor;

      $fornecedor = find('fornecedores', $id);

    } 

  } else {

    header('location: index.php');

  }

}

function delete($id = null) {



  global $fornecedor;

  $fornecedor = remove('fornecedores', $id);
  header('location: index.php');

}


function recover($id = null) {



  global $fornecedor;

  $fornecedor = reactivate('fornecedores', $id);
  header('location: index.php');

}



?>