<?php



include("conexao.php");

$id = $_POST['idproduto'];

$conn = new mysqli($servername, $username, $password, $database);

$sql = $conn->prepare("DELETE FROM `produtos` WHERE id = '$id'");

if($sql->execute()){
    echo '<div class="php-content container-fluid">PRODUTO APAGADO COM SUCESSO</div>';
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">CADASTRAMENTO PRODUTOS</a>
        </div>
      </nav>


      <footer class="rodape">
    <p>DESENVOLVIDO POR DAVID @QUERIAPROGRAMAR</p>
</footer>


</body>
</html>