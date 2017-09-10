<!DOCTYPE html>

<html>

<head>
<?php 

	session_start();
	$_SESSION['bool'] = null;
	
?>

<script language="JavaScript" type="text/javascript" src="<?php echo BASEURL; ?>js/jquery.mask.js">
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
    <meta charset="utf-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <title>CRUD</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">

    <style>

        body {

            padding-top: 50px;

            padding-bottom: 20px;

        }

    </style>

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

</head>

<body>



    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">          

            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                   Fornecedores <span class="caret"></span>

                </a>

                <ul class="dropdown-menu">

                    <li><a href="<?php echo BASEURL; ?>fornecedores">Gerenciar Fornecedores</a></li>

                    <li><a href="<?php echo BASEURL; ?>fornecedores/add.php">Novo Fornecedor</a></li>

                </ul>

            </li>

          </ul>

        </div><!--/.navbar-collapse -->

      </div>

    </nav>



    <main class="container">