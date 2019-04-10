<?php 

    include "inc/head.php";
    include "inc/header.php";
    require "inc/funcoes.php";
    
    // variaveis
    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $numCartao = $_REQUEST["numCartao"];
    $valCartao = $_REQUEST["valCartao"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $infosCurso = $_REQUEST["infosCurso"];
    $erros = [];
     
    

    validarCompra($nome, $cpf, $numCartao, $valCartao, $cvv);
   
?>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
        <?php if(count ($erros) > 0) : ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <span>Preencha seus dados corretamente!</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php foreach($erros as $chave => $valoErro) : ?>
                            <li class="list-group-item">
                                <?= $valoErro ?>       
                            </li>
                        <?php endforeach; ?>                       
                    </ul>
                    <div class="center">
                        <a href="index.php">Voltar para home</a>
                    </div>
                </div>
            </div>
        <?php else : ?>    
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>Compra realizada com sucesso!</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome Curso: </strong><?= $nomeCurso; ?></li>
                        <li class="list-group-item"><strong>Preço: R$ </strong><?= $infosCurso; ?></li>
                        <li class="list-group-item"><strong>Nome Completo: </strong><?= $nome; ?></li>
                    </ul>
                    <div class="center">
                        <a href="index.php">Voltar para home</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>    
        </div>    
    </div>
    <?php include "inc/footer.php"; ?>