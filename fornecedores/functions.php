<?php



require_once('../config.php');

require_once('fornecedoresbd.php');

require_once(DBAPI);



$fornecedores = null;

$fornecedor = null;

$endereco = null;







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



  if ((!empty($_POST['fornecedor'])) && (!empty($_POST['endereco']))) {

    

    $today = 

      date_create('now', new DateTimeZone('America/Sao_Paulo'));



    $fornecedor = $_POST['fornecedor'];
	$endereco = $_POST['endereco'];
	
    $fornecedor['modified'] = $today->format("Y-m-d");
	$fornecedor['ativo'] = true;
    

	save_forn('fornecedores', 'endereco', $fornecedor, $endereco);
	
	

    header('location: index.php');

  }

}

function add_address() {



  if (!empty($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
    save('endereco', $endereco);
    header('location: index.php');

  }

}



?>