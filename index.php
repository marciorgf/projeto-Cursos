<?php
    require "req/database.php";
    include "inc/head.php";
    include "inc/header.php";
    // include "req/database.php";

    try {
        $query = $conexao->query('SELECT * FROM cursos'); // consulta banco de dados

        $cursos = $query->fetchAll(PDO::FETCH_ASSOC); // trás todas as linhas em array associativo
        
        $conexao = null;

    } catch(PDOException $Exception) {
        echo $Exception->getMessage();
    }

// $cursos = [
//         "Full Stack" => ["Curso de desenvolvimento web", 1000.99, "full.jpeg", "fullstack"],
//         "Marketing Digital" => ["Curso de Marketing", 1000.98, "marketing.jpg", "marketing"],
//         "UX" => ["Curso de User Experiênce", 9000.98, "ux.jpg", "ux"],
//         "Mobile Android" => ["curso de apps", 1000.97, "android.png", "android"]
//     ];
    
?>
    <div class="container">

        <div class="row">
            <?php foreach ($cursos as $key => $infosCurso) : ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="assets/img/produtos/<?php echo $infosCurso['image']; ?>" alt= "Foto curso <?php echo $infosCurso['nome']; ?>">
                    <div class="caption">
                        <!-- descrição curso -->
                        <h3><?php echo $infosCurso['nome']; ?></h3>
                        <p><?php echo $infosCurso['descricao']; ?></p>
                        <p><?php echo $infosCurso['preco']; ?></p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $infosCurso['tag']; ?>" role="button">Comprar</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php foreach ($cursos as $key => $infosCurso) : ?>
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $infosCurso['tag']; ?>" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Preencha seus dados</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Curso de: <?php echo $infosCurso['nome'];?></h4>
                            <h4>Preço R$ <?php echo $infosCurso['preco']; ?></h4>

                            <form action="validarCompra.php?" method="post">

                            <input type="hidden" name="nomeCurso" value="<?php echo $infosCurso['nome']; ?>">
                            <input type="hidden" name="infosCurso" value="<?php echo $infosCurso['preco']; ?>">

                                <div class="input-group col-md-5">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input id="nomeCompleto" name="nomeCompleto" type="text" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" name="cpf" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="numCartao">Numero do Cartão</label>
                                    <input id="numCartao" name="numCartao" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="valCartao">Validade do Cartão</label>
                                    <input id="valCartao" name="valCartao" type="month" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cvv">CVV</label>
                                    <input id="cvv" name="cvv" type="number" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Comprar</button>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include "inc/footer.php"; ?>
</body>
</html>