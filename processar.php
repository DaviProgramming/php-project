<?php

include("conexao.php");

//inicio adicionar produtos

$arquivo = $_FILES['arquivo']['name'];
$nomeproduto = $_POST['nomeproduto'];
$estoque = $_POST['estoque'];
$preco = $_POST['preço'];
$sku = $_POST['sku'];


echo "Nome do produto: $nomeproduto estoque: $estoque preço: $preco sku: $sku";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br> Connected successfully";

$conn = new mysqli($servername, $username, $password, $database);
$result_produto = "INSERT INTO `produtos` (nomeproduto, preço, sku, estoque, foto) VALUES ('$nomeproduto', '$preco', '$sku', '$estoque', '$arquivo')";
$resultado_produto = mysqli_query($conn, $result_produto);
$ultimo_id = mysqli_insert_id($conn);

echo '<div class="php-content container-fluid">PRODUTO ADICIONADO COM SUCESSO!</div>';


$_UP['pasta'] = 'C:/xampp/htdocs/produtos/'.$ultimo_id.'/';
mkdir($_UP['pasta'], 0777);
$nome_final = $_FILES['arquivo']['name'];
move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final);



//fim adicionar produto

//adicionar imagem





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="">CADASTRAMENTO PRODUTOS</a>
        </div>
      </nav>


      <footer class="rodape">
    <p>DESENVOLVIDO POR DAVID @QUERIAPROGRAMAR</p>
</footer>