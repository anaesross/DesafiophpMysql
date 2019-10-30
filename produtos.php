<?php include_once("includes/connection.php");
include_once("includes/header.php");

$query = $db->query('SELECT * FROM produtos');
$produtos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="container">
<!-- <php 
    echo"<pre>";
    var_dump($verProduto) 
?> -->
    <div class="row bg-light">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            <img src="<?php echo $_POST['imagem']?> " />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h1><?php echo $_POST['nome'] ?></h1>

            <p>Categoria: <?php echo $_POST['categoria']?></p>
           
            <p>Descrição: <?php echo $_POST['descricao']?></p>

            <p>Quantidade: <?php echo $_POST['quantidade']?></p>

            <p>Preço: <?php echo $_POST['preco']?></p>
            
        </div>
    </div>