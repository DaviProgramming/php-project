<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">CADASTRAMENTO PRODUTOS</a>
        </div>
      </nav>


    <article>
        
    <div class="container-fluid align-baseline">
        <div class="formstyle">

            <form method="POST"  action="consulta.php" enctype="multipart/form-data" class="">
                <button class="btn btn-light">Consultar Banco de Dados</button>
                
            </form>
            
                </div>        
        

    <div class="formstyle">
    <button class="butao btn btn-light">Adicionar Produto</button>
    
    
    <form method="POST"  action="processar.php" enctype="multipart/form-data" class="form">
        <p>
        <label>Nome do produto</label>
        <input type="text" name='nomeproduto' class="btn btn-dark">
        </p>

        <p>
        <label>Estoque</label>
        <input type="number" name='estoque' class="btn btn-dark">
        </p>

        <p>
        <label>Preço</label>
        <input type="number" name='preço' class="btn btn-dark">
        </p>

        <p>
        <label>sku</label>
        <input type="text" name='sku' class="btn btn-dark">
        </p>

        <p>
        <label>Imagem</label>
        <input type="file" name='arquivo' class="btn btn-dark">
        </p>
        
        <input type="submit" value="cadastrar" class="btn btn-primary">

    </form>
    </div>
 

    



    <div class="formstyle">
    <button class="butao2 btn btn-light">Alterar</button>

    
    <form method="POST"  action="alterarproduto.php" enctype="multipart/form-data">
        <div class="form2">
        <p>
        <label>Alterar Nome do produto</label>
        <input type="text" name='alterarproduto' class="btn btn-dark">
        

        <label>Digite o id</label>
        <input type="text" name='idproduto' class="btn btn-dark">

        <input type="submit" value="alterar" class="btn btn-primary">
        </p>
    </form>

    <form method="POST"  action="alterarestoque.php" enctype="multipart/form-data">

        <p>
        <label>Alterar Estoque</label>
        <input type="number" name='alterarestoque' class="btn btn-dark">

        <label>Digite o id</label>
        <input type="number" name='idproduto' class="btn btn-dark">

        <input type="submit" value="alterar" class="btn btn-primary" class="btn btn-dark">
        </p>

        </form>

        <form method="POST"  action="alterarpreco.php" enctype="multipart/form-data">

        <p>
        <label>Alterar Preço</label>
        <input type="number" name='alterarpreço' class="btn btn-dark">

        <label>Digite o id</label>
        <input type="number" name='idproduto' class="btn btn-dark">

        <input type="submit" value="alterar" class="btn btn-primary">
        </p>

        </form>
        
        <form method="POST"  action="alterarsku.php" enctype="multipart/form-data">

        <p>
        <label>Alterar sku</label>
        <input type="text" name='alterarsku' class="btn btn-dark">

        <label>Digite o id</label>
        <input type="number" name='idproduto' class="btn btn-dark">

        <input type="submit" value="alterar" class="btn btn-primary">
        </p>

        </form>
        

        <form method="POST"  action="alterarimagem.php" enctype="multipart/form-data" class="">

        <p>
        <label>Alterar Imagem</label>
        <input type="file" name='alterarimagem' class="btn btn-dark">
        
        <label>Digite o id do produto</label>
        <input type="number" name='idproduto' class="btn btn-dark">
        <input type="submit" value="alterar" class="btn btn-primary">
        </p>



        </form>

    </div>
        </div>

        <div class="formstyle">
        <button type="submit" class="butao3 btn btn-light">Deletar </button>
        
        
        <form method="POST"  action="deletar.php" enctype="multipart/form-data" class="form3">
        <p>
        <label>Digite o ID do item que deseja deletar</label>
        <input type="text" name='idproduto' class="btn btn-dark">

        <input type="submit" value="Deletar" class="btn btn-primary">
        </p>
        
        </form>
    </div>
        
    </div>
</article>

<footer class="rodape">
    <p>DESENVOLVIDO POR DAVID @QUERIAPROGRAMAR</p>
</footer>
    

        


    <script>
        var butao = document.querySelector(".butao");
        butao.addEventListener("click", function(){
        document.querySelector(".form").classList.toggle("showmenu");

        
   
})

var butao = document.querySelector(".butao2");
        butao.addEventListener("click", function(){
        document.querySelector(".form2").classList.toggle("showmenu");

        
   
})

var butao = document.querySelector(".butao3");
        butao.addEventListener("click", function(){
        document.querySelector(".form3").classList.toggle("showmenu");

        
   
})

    </script>
</body>
</html>