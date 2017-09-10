<?php 

  require_once('functions.php'); 
	add();


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
	
	</script>
	
	<script language="JavaScript" type="text/javascript" src="../js/jquery.mask.js">
		$(document).ready(function(){
		  $('.date').mask('00/00/0000');
		  $('.time').mask('00:00:00');
		  $('.date_time').mask('00/00/0000 00:00:00');
		  $('.cep').mask('00000-000');
		  $('.phone').mask('0000-0000');
		  $('.phone_with_ddd').mask('(00) 0000-0000');
		  $('.phone_us').mask('(000) 000-0000');
		  $('.mixed').mask('AAA 000-S0S');
		  $('.cpf').mask('000.000.000-00', {reverse: true});
		  
		  $('.cnpj').mask('ZZ.ZZZ.ZZZ/ZZZZ-ZZ', {reverse: true}, {
			translation: {
			  'Z': {
				pattern: /[0-9]/, optional: true
			  }
			}
		  });

		  $('.money').mask('000.000.000.000.000,00', {reverse: true});
		  $('.money2').mask("#.##0,00", {reverse: true});
		  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
			translation: {
			  'Z': {
				pattern: /[0-9]/, optional: true
			  }
			}
		  });
		  $('.ip_address').mask('099.099.099.099');
		  $('.percent').mask('##0,00%', {reverse: true});
		  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
		  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
		  $('.fallback').mask("00r00r0000", {
			  translation: {
				'r': {
				  pattern: /[\/]/,
				  fallback: '/'
				},
				placeholder: "__/__/____"
			  }
			});
		  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
		});

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
  

    <div id="dvcnpj" class="form-group col-md-3">

      <label for="cnpj">CNPJ</label>

      <input id="cnpj" type="text" class="cnpj form-control" name="fornecedor['cnpj']">

    </div>



    <div id="dvie" class="form-group col-md-2">

      <label for="campo3">Inscrição Estadual</label>

      <input id="ie" type="text" class="form-control" name="fornecedor['ie']">

    </div>
	

	

	<div id="dvci" class="form-group col-md-3">

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


