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

    function logarUsuario($email, $senha) {
        global $nomeArquivo;
        $logado = false;
        // pegando o conteudo do arquivo usuarios.json
        $usuariosJson = file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson, true);
        // verificando se o usuario existe no arquivo usuario.json
        foreach($arrayUsuarios["usuarios"] as $chave => $valor){
            //  verificando se o email digitado é igual ao email do json
            //  verificando se a senha digitada é igual e senha do json
            if ($valor["email"] == $email && password_verify($senha, $valor["senha"] )){
                $logado = true;
                break;
            }
        }
        return $logado;
    }
?>