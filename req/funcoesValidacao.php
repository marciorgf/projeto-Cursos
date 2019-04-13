<?php
// funções
function validarNome ($nome) {
    return strlen ($nome) > 0 && strlen ($nome) <=15;
}

function validarCpf($cpf) {
    return strlen ($cpf) == 11;
}

function validarNumCartao ($numCartao) {
    $primeiroNum = substr ($numCartao, 0, 1);
    return $primeiroNum == 4 || $primeiroNum == 5 || $primeiroNum == 6;
}

function validarData ($valCartao) {
    $dataAtual = date("Y-m");
    return $valCartao >= $dataAtual;
}

function validarCvv ($cvv) {
    return strlen($cvv) == 3;
}

function validarCompra ($nome, $cpf, $numCartao, $valCartao, $cvv) {
    global $erros;
    
    if (!validarNome($nome)) {
        array_push ($erros, "Preencha Seu nome");
    }
    if (!validarCpf($cpf)) {
        array_push($erros, "Seu CPF precisa ter 11 Caracteres");
    }
    if (!validarNumCartao($numCartao)) {
        array_push($erros, "Seu cartão precisa começar com 4, 5 ou 6");
    }
    if (!validarData($valCartao)) {
        array_push($erros, "Avalidade precisa ser maior que a atual");
    }
    if (!validarCvv($cvv)) {
        array_push($erros, "Seu CVV precisa ter 3 Caracteres");
    }
    
}

?>