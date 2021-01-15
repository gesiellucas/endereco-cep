<?php

$inserir_dados = "INSERT INTO dados (cep, rua, bairro, cidade, estado, IBGE) values ('$cep', '$rua', '$bairro', '$cidade', '$uf', '$ibge')";

if($conn->query($inserir_dados) === true){
    header("location: index.php");
}

$conn->close();