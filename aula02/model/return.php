<?php

    $nome = $_REQUEST['nome'];
    $datanasc = $_REQUEST['datanasc'];
    $bebida = $_REQUEST['bebida'];
    $dataAtual = new DateTime('now');
    $dateAtt = new DateTime($datanasc);
    $datas = $dataAtual -> diff($dateAtt);
    
    if(empty($nome)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Campos obrigatórios não foram preenchidos.'
        );
        
    } else {

        if($datas->y < 18) {
            $dados = array(

                "mensagem" => 'Seu nome é: '.$nome.', sua bebida favorita é '.$bebida.' ,portanto, ainda não pode ingerir bebida alcoólica.'

            );
        }
        else {
            $dados = array(
                "mensagem" => 'Seu nome é: '.$nome.', sua bebida favorita é '.$bebida.' e você já pode ingerir bebida alcoólica.' 
            );
        }

    }
    

    echo json_encode($dados);

