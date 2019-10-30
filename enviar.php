<?php 
include_once("includes/connection.php");
/* $path = 'assets/images/';

if(!empty($_FILES)) {

    $img = $_FILES['imagem'];
    $imgName = time(); //time gera o horario que foi enviado o form
    
    $ext = end(explode('.', $img['name'])); // end pega o final do array, explode divide uma string em array , no 
    //caso quando achar o .    , [name] = nome da imagem pelo post
    
    $imgName .= '.' . $ext;
    //$imgName = $imgName . '.' . $ext; concatenou imgname = time + a extensão da imagem (arquivo)
    
    if( in_array($ext, ['jpg', 'jpeg', 'png', 'gif']) ) { //in_array = busca dentro do array, $ext nome do formato
        //da imagem [o que queremos buscar no array] 

        if( move_uploaded_file($img['tmp_name'], $path . $imgName) ) { 
            //echo $path . $imgName;
            $_POST['imagem'] = $path . $imgName;  //$path = caminho e $imgName = nome + extensão
        }
        else {
            //echo 'upload falhou';
        }
    }
} */

/*Cadastrar Produtos*/

    $nomeProduto = $_POST['nome'];
    $descricaoProduto = $_POST['descricao'];
    $categoriaProduto = $_POST['categoria'];
    $precoProduto = $_POST['preco'];
    $quantidadeProduto = $_POST['quantidade'];
    // $imagemProduto = $_POST['imagem'];

    $query = $db->prepare('INSERT INTO desafiophp (nome, descricao, categoria, preco, quantidade/*,imagem*/) 
    VALUES (
        :nome,
        :descricao,
        :categoria,
        :preco,
        :quantidade,
        -- :imagem
    )');

    $result = $query->execute([
        "nome" => $nomeProduto,
        "descricao" => $descricaoProduto,
        "categoria" => $categoriaProduto,
        "preco" => $precoProduto,
        "quantidade" => $quantidadeProduto,
        // "imagem" => $imagemProduto
    ]);

        var_dump($result);

    echo "<script>
            alert('Produto cadastro com sucesso!');
            location = 'index.php';
        </script>";

//header('location: index.php');