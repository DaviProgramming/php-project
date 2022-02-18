<?php

include("conexao.php");

$id = $_POST['idproduto'];
$alterarimagem = $_FILES['alterarimagem']['name'];

$conn = new mysqli($servername, $username, $password, $database);

$sql = "UPDATE `produtos` SET foto = '$alterarimagem' WHERE id = $id";
$resultado_produto = mysqli_query($conn, $sql);
$ultimo_id = mysqli_insert_id($conn);
$_UP['pasta'] = 'C:/xampp/htdocs/produtos/'.$id.'/';
mkdir($_UP['pasta'], 0777);
$nome_final = $_FILES['alterarimagem']['name'];
move_uploaded_file($_FILES['alterarimagem']['tmp_name'], $_UP['pasta']. $nome_final);

if($sql){
    echo '<div class="php-content container-fluid">IMAGEM ATUALIZADA COM SUCESSO!</div>';
}

else{
    echo "erro ao atualizar";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Alterar imagem</a>
        </div>
      </nav>


      <footer class="rodape">
    <p>DESENVOLVIDO POR DAVID @QUERIAPROGRAMAR</p>
</footer>