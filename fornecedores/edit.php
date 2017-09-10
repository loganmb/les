<?php 

  require_once('functions.php'); 

  edit();

?>

   <script language="JavaScript">
        function habilitaCampos(valor) {
			ie = document.getElementById('ie');
			cnpj = document.getElementById('cnpj');
			ci = document.getElementById('ci');
		
			
            if (valor == '2') {
				
                cnpj.setAttribute("required", "true");
				ie.setAttribute("required", "true");
				ci.setAttribute("required", "false");
            } else if(valor == '1'){
                cnpj.setAttribute("required", "false");
				ie.setAttribute("required", "false");
				ci.setAttribute("required", "true");
			
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
		
		function checkfunc()
		{
			ativo = document.getElementById('chbAtivo');
			
			if(ativo.checked == true){
				ativo.value = 'checked';

			}
			else{
				ativo.value = '';
			}
		}
		
	
	</script>

<?php include(HEADER_TEMPLATE); ?>



<h2>Atualizar Fornecedor</h2>



<form name="form1" action="edit.php?id=<?php echo $fornecedor['id']; ?>" method="post">

  <hr />

<div class="row">

    <div class="form-group col-md-7">

      <label for="nome">Nome / Razão Social</label>

      <input type="text" class="form-control" name="fornecedor['nome']" value="<?php echo $fornecedor['nome']; ?>">

    </div>

	<div class="form-group col-md-2">

      <label for="campo2">Fundação</label>

      <input type="text" class="form-control" name="fornecedor['fundacao']" value="<?php echo $fornecedor['fundacao']; ?>">

    </div>
	
	
	<div class="form-group col-md-3">

      <label for="campo2">Categoria</label>

      <select id="slct" class="form-control" name="fornecedor['categoria']" onselect>
	  <option value="0" selected></option>
	  
		<option value="1" 
		<?php echo $fornecedor['categoria']=='1'?'selected':''; ?> >Importador</option>
		
  		<option value="2" 
		<?php echo $fornecedor['categoria']=='2'?'selected':''; ?> >Nacional</option>
		
	  </select>

    </div>



  </div>

  <div class="row">
  

    <div id="dvcnpj" class="form-group col-md-3">

      <label for="cnpj">CNPJ</label>

      <input id="cnpj" type="text" class="form-control" name="fornecedor['cnpj']" value="<?php echo $fornecedor['cnpj']; ?>">

    </div>



    <div id="dvie" class="form-group col-md-2">

      <label for="campo3">Inscrição Estadual</label>

      <input id="ie" type="text" class="form-control" name="fornecedor['ie']" value="<?php echo $fornecedor['ie']; ?>">

    </div>
	

	

	<div id="dvci" class="form-group col-md-3">

      <label for="campo3">Certificado de Importador</label>

      <input id="ci" type="text" class="form-control" name="fornecedor['ci']" value="<?php echo $fornecedor['ci']; ?>">

    </div>
	
	 

	 
    <div class="form-group col-md-2">

      <label for="campo3">Data de Cadastro</label>

      <input type="text" class="form-control" name="fornecedor['modified']" disabled value="<?php echo $fornecedor['modified']; ?>">

    </div>
	
	 
    <div class="form-group col-md-2" id="dvativo">
	
	 <label for="campo3">Status</label>
      <select id="slAtivo" class="form-control" name="fornecedor['ativo']" onselect>
	  <option value="0" selected></option>
	  
		<option value="1" onclick="habilitaCampos('1')" 
		<?php echo $fornecedor['ativo']=='1'?'selected':''; ?> >Ativo</option>
		
  		<option value="0" onclick="habilitaCampos('2')" 
		<?php echo $fornecedor['ativo']=='0'?'selected':''; ?> >Inativo</option>
		
	  </select>
    </div>
	
  </div>
  
<div class="row form-group">
<label>Endereço</label>
</div>
  <div class="row">

  
  
    <div class="form-group col-md-5">

      <label for="rua">Rua</label>

      <input type="text" class="form-control" name="fornecedor['rua']" value="<?php echo $fornecedor['rua']; ?>">

    </div>
	<div class="form-group col-md-3">

      <label for="campo2">Número</label>

      <input type="text" class="form-control" name="fornecedor['num']" value="<?php echo $fornecedor['num']; ?>">

    </div>


    <div class="form-group col-md-3">

      <label for="campo2">Cidade</label>

      <input type="text" class="form-control" name="fornecedor['cidade']" value="<?php echo $fornecedor['cidade']; ?>">

    </div>

    

    <div class="form-group col-md-2">

      <label for="campo3">CEP</label>

      <input type="text" class="form-control" name="fornecedor['cep']" value="<?php echo $fornecedor['cep']; ?>">

    </div>

    

  

  </div>

  

  <div class="row">

    <div class="form-group col-md-1">

      <label for="campo3">UF</label>

      <input type="text" class="form-control" name="fornecedor['estado']" value="<?php echo $fornecedor['estado']; ?>">

    </div>
	
	  <div class="form-group col-md-3">

      <label for="campo1">País</label>

      <input type="text" class="form-control" name="fornecedor['pais']" value="<?php echo $fornecedor['pais']; ?>">

    </div>
</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label for="campo3">Observação</label>

			<textarea cols="" rows="5" class="form-control" name="fornecedor['obs']" onkeyup="countChar(this)" value="<?php echo $fornecedor['obs']; ?>">
			</textarea>
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