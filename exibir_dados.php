<?php

include "conn.php";

$sql = "SELECT * from dados ORDER BY ID_dados DESC";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
    echo  "<tr>" .
        "<th scope='row'>" . $row['ID_dados'] . "</th>" .
        "<td>" . $row['cep'] . "</td>" .
        "<td>" . $row['rua'] . "</td>" .
        "<td>" . $row['bairro'] . "</td>" .
        "<td>" . $row['cidade'] . "</td>" .
        "<td>" . $row['estado'] . "</td>" .
        "<td>" . $row['IBGE'] . "</td>" .
        "</tr>";
    }
} 