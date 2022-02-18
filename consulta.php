<?php

include("conexao.php");

echo '<table border=1 class="table php-content">';
echo '<thead class="thead-dark">';
echo "<tr>";
echo '<th scope="col">ID</th>';
echo '<th scope="col">Nome do produto</th>';
echo '<th scope="col">Preço</th>';
echo '<th scope="col">Estoque</th>';
echo '<th scope="col">sku</th>';
echo '<th scope="col">foto</th>';
echo "</tr>";
echo '</thead>';

$conn = new mysqli($servername, $username, $password, $database);
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conn,$sql) or die ("Erro ao cadastrar registro");


while ($registro = mysqli_fetch_array($resultado)){
if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
    echo "arquivo enviado";
}
$arquivo = $registro['foto'];
$nomeproduto = $registro['nomeproduto'];
$estoque = $registro['estoque'];
$preco = $registro['preço'];
$sku = $registro['sku'];
$id = $registro['id'];

echo '<tr scope="col">';
echo "<td>".$id."</td>";
echo "<td>".$nomeproduto."</td>";
echo "<td>".$preco."</td>";
echo "<td>".$estoque."</td>";
echo "<td>".$sku."</td>";
echo "<td>".$arquivo."</td>";
echo "</tr>";

}

echo "</table>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA DE PRODUTOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="">CONSULTA DE PRODUTOS</a>
        </div>
      </nav>


      <footer class="rodape">
    <p>DESENVOLVIDO POR DAVID @QUERIAPROGRAMAR</p>
</footer>


</body>
</html>
