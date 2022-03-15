<?php

    $NOME = $_REQUEST ['NOME'];
    $BEBIDA = $_REQUEST ['BEBIDA'];
    $IDADE = $_IDADE ['IDADE'];

    
    if (empty($nome)) {
        $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
        );
    } else {

?>