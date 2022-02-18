<?php

include("conexao.php");

$id = $_POST['idproduto'];
$alterarestoque = $_POST['alterarestoque'];

$conn = new mysqli($servername, $username, $password, $database);

$sql = $conn->prepare("UPDATE `produtos` SET estoque = '$alterarestoque' WHERE id = $id");

if($sql->execute()){
    echo "Cliente atualizado";
}

echo "<br> id: $id";

?>