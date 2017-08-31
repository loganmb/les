<?php 

  require_once('functions.php'); 
	add();


?>

   <script language="JavaScript">
        function habilitaCampos(valor) {
            dvcnpj = document.getElementById('dvcnpj');
			dvie = document.getElementById('dvie');
            dvci = document.getElementById('dvci');
			
            if (valor == '2') {
                dvcnpj.style.display = 'block';
				dvie.style.display = 'block';
				dvci.style.display = 'none';
            } else {
                dvcnpj.style.display = 'none';
				dvie.style.display = 'none';
				dvci.style.display = 'block';
            }
        }
  

		function countChar(val){
			 var len = val.value.length;
			 if (len > 1000) {
					  val.value = val.value.substring(0, 1000);
			 } else {
					  $('#charNum').text(1000 - len);
			 }
		};
	
	</script>
<?php include(HEADER_TEMPLATE); ?>



<h2>Novo Fornecedor</h2>


	
<form action="add.php" method="post">

  <!-- area de campos do form -->

  <hr />
<div class="row form-group">
<label>Informações da empresa</label>
</div>
  <div class="row">

    <div class="form-group col-md-7">

      <label for="nome">Nome / Razão Social</label>

      <input type="text" class="form-control" name="fornecedor['nome']">

    </div>

	<div class="form-group col-md-2">

      <label for="campo2">Fundação</label>

      <input type="text" class="form-control" name="fonecedor['fundacao']">

    </div>
	
	
	<div class="form-group col-md-3">

      <label for="campo2">Categoria</label>

      <select class="form-control" name="fonecedor['categoria']">
	  <option value="0"></option>
		<option value="1" onClick="habilitaCampos('1')">Importador</option>
  		<option value="2" onClick="habilitaCampos('2')">Nacional</option>
	  </select>

    </div>



  </div>

  <div class="row">
  

    <div id="dvcnpj" class="form-group col-md-3" hidden="true">

      <label for="cnpj">CNPJ</label>

      <input type="text" class="form-control" name="fornecedor['cnpj']">

    </div>



    <div id="dvie" class="form-group col-md-2" hidden="true">

      <label for="campo3">Inscrição Estadual</label>

      <input type="text" class="form-control" name="fonecedor['ie']">

    </div>
	

	

	<div id="dvci" class="form-group col-md-3" hidden="true">

      <label for="campo3">Certificado de Importador</label>

      <input type="text" class="form-control" name="fonecedor['ci']">

    </div>
	
	 

	 
    <div class="form-group col-md-2">

      <label for="campo3">Data de Cadastro</label>

      <input type="text" class="form-control" name="fonecedor['modified']" disabled>

    </div>
	
  </div>
  
<div class="row form-group">
<label>Endereço</label>
</div>
  <div class="row">

  
  
    <div class="form-group col-md-5">

      <label for="rua">Rua</label>

      <input type="text" class="form-control" name="endereco['rua']">

    </div>
	<div class="form-group col-md-3">

      <label for="campo2">Número</label>

      <input type="text" class="form-control" name="endereco['num']">

    </div>


    <div class="form-group col-md-3">

      <label for="campo2">Cidade</label>

      <input type="text" class="form-control" name="endereco['cidade']">

    </div>

    

    <div class="form-group col-md-2">

      <label for="campo3">CEP</label>

      <input type="text" class="form-control" name="endereco['cep']">

    </div>

    

  

  </div>

  

  <div class="row">

    <div class="form-group col-md-1">

      <label for="campo3">UF</label>

      <input type="text" class="form-control" name="endereco['estado']">

    </div>
	
	  <div class="form-group col-md-3">

      <label for="campo1">País</label>

      <input type="text" class="form-control" name="endereco['pais']">

    </div>
</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label for="campo3">Observação</label>

			<textarea cols="" rows="5" class="form-control" name="endereco['obs']" onkeyup="countChar(this)"></textarea>
		</div>
<div id="charNum"></div>

	</div>
  

  <div id="actions" class="row">

    <div class="col-md-12">

      <button type="submit" class="btn btn-primary">Salvar</button>

      <a href="index.php" class="btn btn-default">Cancelar</a>

    </div>

  </div>

</form>



<?php include(FOOTER_TEMPLATE); ?>


