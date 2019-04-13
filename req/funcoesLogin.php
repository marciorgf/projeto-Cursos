<?php 
    // definindo o nome do arquivo
    $nomeArquivo = "usuarios.json";
    // função para cadastro de novos usuarios
    function cadastrarUsuario($usuario) {
        // incluindo a variavel na função
        global $nomeArquivo;
        // pegando o conteudo do arquivo usuarios.json
        $usuariosJson = file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson, true);
        // adicionando um novo usuario para o array associativo
        array_push($arrayUsuarios["usuarios"], $usuario);
        // transformando o array associativo em json
        $usuariosJson = json_encode($arrayUsuarios);
        // colocando o jason devolta para o arquivo usuarios.json
        $cadastrou = file_put_contents($nomeArquivo, $usuariosJson);
        // retornando true ou false
        return $cadastrou;
    }
?>