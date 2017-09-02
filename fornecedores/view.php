<?php 

	require_once('functions.php'); 

	view($_GET['id']);

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Fornecedor <?php echo $fornecedor['nome']; ?></h2>

<hr>



<?php if (!empty($_SESSION['message'])) : ?>

	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>

<?php endif; ?>



<dl class="dl-horizontal">

	<dt>Nome / Raz�o Social:</dt>

	<dd><?php echo $fornecedor['nome']; ?></dd>



	<dt>CNPJ:</dt>

	<dd><?php echo $fornecedor['cnpj']; ?></dd>


	
	<dt>Inscri��o Estadual:</dt>

	<dd><?php echo $fornecedor['ie']; ?></dd>

	
	
	<dt>Certificado de Importador:</dt>

	<dd><?php echo $fornecedor['ci']; ?></dd>
	
	
	
	<dt>Data de Funca��o:</dt>

	<dd><?php echo $fornecedor['fundacao']; ?></dd>

</dl>

<div>Endere�o</div>

<dl class="dl-horizontal">

	<dt>Rua:</dt>

	<dd><?php echo $fornecedor['rua'], ', ', $fornecedor['num']; ?></dd>



	<dt>Cidade:</dt>

	<dd><?php echo $fornecedor['cidade']; ?></dd>



	<dt>Estado:</dt>

	<dd><?php echo $fornecedor['estado']; ?></dd>
	
	
	
	<dt>Pa�s:</dt>

	<dd><?php echo $fornecedor['pais']; ?></dd>
	
	
	
	<dt>cep:</dt>

	<dd><?php echo $fornecedor['cep']; ?></dd>

</dl>



<dl class="dl-horizontal">

	<dt>Observa��o:</dt>

	<dd><?php echo $fornecedor['obs']; ?></dd>



	<dt>Contribuinte:</dt>

	<dd><?php echo $fornecedor['ativo']=='1'?'Ativo':'Inativo'; ?></dd>


</dl>



<div id="actions" class="row">

	<div class="col-md-12">

	  <a href="edit.php?id=<?php echo $fornecedor['id']; ?>" class="btn btn-primary">Editar</a>

	  <a href="index.php" class="btn btn-default">Voltar</a>

	</div>

</div>



<?php include(FOOTER_TEMPLATE); ?>