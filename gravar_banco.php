<?php
include "conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty( $_POST['cep']) ){
        header("location: index.php?err=cep");
    }else{
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $ibge = $_POST['ibge'];

        include "inserir_dados.php";
    }
    
}

