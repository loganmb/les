<?php

    require_once('functions.php');

    index();

?>



<?php include(HEADER_TEMPLATE); ?>



<header>

	<div class="row">

		<div class="col-sm-6">

			<h2>Fornecedores</h2>
			
		</div>

		<div class="col-sm-6 text-right h2">

	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Fornecedor</a>

	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>

	    </div>

	</div>

</header>



<?php if (!empty($_SESSION['message'])) : ?>

	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">

		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

		<?php echo $_SESSION['message']; ?>

	</div>

	<?php $_SESSION['message'] = null; ?>

<?php endif; ?>



<hr>



<table class="table table-hover">

<thead>

	<tr>

		<th hidden="true">ID</th>

		<th width="20%">Nome</th>

		<th>Categoria</th>

		<th>CNPJ</th>

		<th>IE</th>

		<th>CI</th>
		
		<th>Atualizado em</th>
		
		<th>Fundação</th>
		
		<th>Opções</th>

	</tr>

</thead>

<tbody>

<?php if ($fornecedores) : ?>

<?php foreach ($fornecedores as $fornecedor) : ?>

	<tr>

		<td hidden = "true"><?php echo $fornecedor['id']; ?></td>

		<td><?php echo $fornecedor['nome']; ?></td>
		
		
			<td><?php echo "Importador"; ?></td>

			<td><?php echo "Nacional"; ?></td>

		
		<td><?php echo $fornecedor['cnpj']; ?></td>
		
		<td><?php echo $fornecedor['ie']; ?></td>
			
		<td><?php echo $fornecedor['ci']; ?></td>
		
		
		<td><?php echo $fornecedor['modified']; ?></td>
		
		<td><?php echo $fornecedor['fundacao']; ?></td>
		

		<td class="">

			<a href="view.php?id=<?php echo $fornecedor['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>

			<a href="edit.php?id=<?php echo $fornecedor['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>

			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-fornecedor="<?php echo $fornecedor['id']; ?>">

				<i class="fa fa-trash"></i> Excluir

			</a>

		</td>

	</tr>

<?php endforeach; ?>

<?php else : ?>

	<tr>

		<td colspan="6">Nenhum registro encontrado.</td>

	</tr>

<?php endif; ?>

</tbody>

</table>



<?php include(FOOTER_TEMPLATE); ?>