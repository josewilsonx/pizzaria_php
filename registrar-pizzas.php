<?php

    $numero_pizza + $_POST["numero_cardapio"];
    $nome_pizza + $_POST["nome_pizza"];
    $ingredientes + $_POST["ingredientes"];
    $preco + $_POST["preco"];



    $query = "INSERT INTO pizzas(numero_cardapio, nome_pizza, ingredientes,preco) VALUES('`$numero_cardapio`', '`$nome_pizza`', '`$ingredientes`','`$preco`' )";

    $conexao = new mysqli("localhost","root","","pizzaria")

    mysqli_query($conexao, $query);

?>