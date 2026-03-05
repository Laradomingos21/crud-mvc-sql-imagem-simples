<?php

     $acao = $_GET['acao'] ?? 'listarProduto';

    require_once "models/Produto.php";

     if ($acao == 'listarProduto'){
        $usuarios = listarProduto();
        include "views/listarProduto.php";
    }

    if ($acao == 'criarProduto'){

     $acao = $_GET['acao'] ?? 'listarProduto';

    require_once "models/Produto.php";

     if ($acao == 'listarProduto'){
        $usuarios = listarProduto();
        include "views/listarProduto.php";
    }

    if ($acao == 'criarProduto'){
        
        if ($_POST){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem = "";

            if ($_FILES['imagem']['name']){
             
                $imagem = "img" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            inserirProduto($nome, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagem);
            header("Location: index.php");
        } 

        include "views/criarProduto.php";
    }

    if ($acao == 'editarProduto'){
        $id = $_GET['id'];

        if ($_POST){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem = ['imagem_atual'];

            if ($_FILES['imagem']['name']){
             
                $imagem = "img" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            atualizarProduto($id, $nome, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagem);
            header("Location: index.php");
        }

        $usuario = buscarProduto($id);
        include "views/editarProduto.php";
    }

    if ($acao == 'excluirProduto'){
        excluirProduto($_GET['id']);
        header("Location: index.php");
    }
        if ($_POST){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem = "";

            if ($_FILES['imagem']['name']){
             
                $imagem = "img" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            inserirProduto($nome, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagem);
            header("Location: index.php");
        } 

        include "views/criarProduto.php";
    }

    if ($acao == 'editarProduto'){
        $id = $_GET['id'];

        if ($_POST){
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $fornecedor = $_POST['fornecedor'];
            $quantidade = $_POST['quantidade'];
            $fabricante = $_POST['fabricante'];
            $preco = $_POST['preco'];
            $margem = $_POST['margem'];
            $data_cadastro = $_POST['data_cadastro'];
            $status_pro = $_POST['status_pro'];
            $imagem = ['imagem_atual'];

            if ($_FILES['imagem']['name']){
             
                $imagem = "img" . $_FILES['imagem']['name'];
                move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
            }

            atualizarProduto($id, $nome, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagem);
            header("Location: index.php");
        }

        $usuario = buscarProduto($id);
        include "views/editarProduto.php";
    }

    if ($acao == 'excluirProduto'){
        excluirProduto($_GET['id']);
        header("Location: index.php");
    }