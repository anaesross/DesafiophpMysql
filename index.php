<?php 
include_once("includes/connection.php");
include_once("includes/header.php");

    $query = $db->query('SELECT * FROM produtos');
    $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($produtos);
?>
<main class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Ver Produto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <?php foreach($produtos as $produto):?>
                            <th scope="row"> <?php echo $produto['nome']; ?> </th>
                            <td><?php echo $produto['descricao']; ?> </td>
                            <td><?php echo $produto['categoria']; ?></td>
                            <td><?php echo $produto['preco']; ?></td>
                            <td><?php echo $produto['quantidade']; ?></td>
                            <td><a href="produtos.php?id=<?=$produto['id']?>" >Visualizar</a></td>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-light p-5">
            <h3>Cadastrar Produto</h3>
            <form method="post" action="enviar.php" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" placeholder="Digite o nome do produto"/>
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Digite a categoria do produto"/>
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <input class="form-control" type="text" name="descricao" placeholder="Digite a descrição do produto"/>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input class="form-control" type="number" name="quantidade" placeholder="Digite a quantidade do produto"/>
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input class="form-control" type="number" name="preco" placeholder="Digite o preço do produto"/>
                </div>
                <div class="form-group">                
                    <span>Selecione uma imagem: <br></span><input type="file" name="imagem"/>
                </div>
                <button type="submit" class="btn btn-primary" name="cadastrarProdutos">Cadastrar</button>
            </form>
        </div>
    </div>
</main>