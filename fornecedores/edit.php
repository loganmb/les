<?php 

  require_once('functions.php'); 

  edit();

?>

   <script language="JavaScript">
        function habilitaCampos(valor) {
            dvcnpj = document.getElementById('dvcnpj');
			dvie = document.getElementById('dvie');
            dvci = document.getElementById('dvci');
			ie = document.getElementById('ie');
			cnpj = document.getElementById('cnpj');
			ci = document.getElementById('ci');
			
            if (valor == '2') {
                dvcnpj.style.display = 'block';
				dvie.style.display = 'block';
				cnpj.value = '-';
				ie.value = '-';
				dvci.style.display = 'none';
            } else if(valor == '1'){
                dvcnpj.style.display = 'none';
				dvie.style.display = 'none';
				dvci.style.display = 'block';
				ci.value = '-';
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



<h2>Atualizar Fornecedor</h2>



<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">

  <hr />

<div class="row">

    <div class="form-group col-md-7">

      <label for="nome">Nome / Razão Social</label>

      <input type="text" class="form-control" name="fornecedor['nome']">

    </div>

	<div class="form-group col-md-2">

      <label for="campo2">Fundação</label>

      <input type="text" class="form-control" name="fornecedor['fundacao']">

    </div>
	
	
	<div class="form-group col-md-3">

      <label for="campo2">Categoria</label>

      <select class="form-control" name="fornecedor['categoria']">
	  <option value="0"></option>
		<option value="1" onClick="habilitaCampos('1')">Importador</option>
  		<option value="2" onClick="habilitaCampos('2')">Nacional</option>
	  </select>

    </div>



  </div>

  <div class="row">
  

    <div id="dvcnpj" class="form-group col-md-3" hidden="true">

      <label for="cnpj">CNPJ</label>

      <input id="cnpj" type="text" class="form-control" name="fornecedor['cnpj']">

    </div>



    <div id="dvie" class="form-group col-md-2" hidden="true">

      <label for="campo3">Inscrição Estadual</label>

      <input id="ie" type="text" class="form-control" name="fornecedor['ie']">

    </div>
	

	

	<div id="dvci" class="form-group col-md-3" hidden="true">

      <label for="campo3">Certificado de Importador</label>

      <input id="ci" type="text" class="form-control" name="fornecedor['ci']">

    </div>
	
	 

	 
    <div class="form-group col-md-2">

      <label for="campo3">Data de Cadastro</label>

      <input type="text" class="form-control" name="fornecedor['modified']" disabled>

    </div>
	
  </div>
  
<div class="row form-group">
<label>Endereço</label>
</div>
  <div class="row">

  
  
    <div class="form-group col-md-5">

      <label for="rua">Rua</label>

      <input type="text" class="form-control" name="fornecedor['rua']">

    </div>
	<div class="form-group col-md-3">

      <label for="campo2">Número</label>

      <input type="text" class="form-control" name="fornecedor['num']">

    </div>


    <div class="form-group col-md-3">

      <label for="campo2">Cidade</label>

      <input type="text" class="form-control" name="fornecedor['cidade']">

    </div>

    

    <div class="form-group col-md-2">

      <label for="campo3">CEP</label>

      <input type="text" class="form-control" name="fornecedor['cep']">

    </div>

    

  

  </div>

  

  <div class="row">

    <div class="form-group col-md-1">

      <label for="campo3">UF</label>

      <input type="text" class="form-control" name="fornecedor['estado']">

    </div>
	
	  <div class="form-group col-md-3">

      <label for="campo1">País</label>

      <input type="text" class="form-control" name="fornecedor['pais']">

    </div>
</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label for="campo3">Observação</label>

			<textarea cols="" rows="5" class="form-control" name="fornecedor['obs']" onkeyup="countChar(this)"></textarea>
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