<?php
    // configuracoes gerais
    header('Acces-Control-Allow-Origin:*');

    //abrir conexao
    $conecta = mysqli_connect("localhost", "root", "", "andes");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta, $selecao);

    $retorno = array();
    while ($linha = mysqli_fetch_object($produtos)) {
    $retorno[] = $linha;
    }

    echo json_encode($retorno);

    // fechar conexao
    mysqli_close($conecta);
?>