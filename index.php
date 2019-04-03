<?php
$cursos = [
        "Full Stack" => ["Curso de desenvolvimento web", 1000.99, "full.jpeg", "fullstack"],
        "Marketing Digital" => ["Curso de Marketing", 1000.98, "marketing.jpg", "marketing"],
        "UX" => ["Curso de User Experiênce", 9000.98, "ux.jpg", "ux"],
        "Mobile Android" => ["curso de apps", 1000.97, "android.png", "android"]
    ];

    $usuario = [
        "Nome" => "Marcio",
        "Email" => "teste@teste",
        "senha" => "1234",
        "NivleAcesso" => mt_rand(0, 1)


    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span>Cursos</span>
                    <!-- <img alt="Brand" src="..."> -->
                </a>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquise Aqui">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo "assets/img/$infosCurso[2]"; ?>" alt="<?php echo "Foto curso $nomeCurso"; ?>">
                    <div class="caption">
                        <!-- descrição curso -->
                        <h3><?php echo $nomeCurso; ?></h3>
                        <p><?php echo $infosCurso[0]; ?></p>
                        <p><?php echo $infosCurso[1]; ?></p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="<?php echo "#$infosCurso[3]"; ?>" role="button">Comprar</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $infosCurso[3]; ?>" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Preencha seus dados</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-group col-md-5">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input id="nomeCompleto" type="text" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="numCartao">Numero do Cartão</label>
                                    <input id="numCartao" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="valCartao">Validade do Cartão</label>
                                    <input id="valCartao" type="month" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cvv">CVV</label>
                                    <input id="cvv" type="number" class="form-control">
                                </div>
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


</body>

</html>