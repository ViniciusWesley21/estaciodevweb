    
<?php
const TAXA_LIMITE = 0.3;
$salario = $_GET['salario'];
$valorPrestacao  = $_GET['prestacao'];
$nome = $_GET['nome'];



$limite = calcularAumento($salario, TAXA_LIMITE);
$mensagem = "Empréstimo com prestação de ".$valorPrestacao;

if($valorPrestacao<$limite){
  $mensagem .= " Liberado";
  $mensagem = "<h5 class=\"card-title\">Liberado</h5> <p class=\"card-text\">$mensagem</p>";
}else{
  $mensagem .= " Não foi Liberado, pois o valor da prestação é superior so permitido";
  $mensagem = "<h5 class=\"card-title\">Negado</h5> <p class=\"card-text\">$mensagem</p>";
}


function calcularAumento($salario, $limite){    
    $limite = $salario * $limite;  
    return $limite;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Exercício!</title>
  </head>
  <body>

  <div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Status Empréstimo</div>
  <div class="card-body">

    <?php print $mensagem ?>

  </div>
</div>

</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

