<?php
session_start();

include "app/config/conexao.php";
include "models/Usuario.php";
include "models/Produto.php";
require_once "controllers/UsuarioController.php";
require_once "controllers/ProdutoController.php";

if(isset($_SESSION['adm'])){

    echo "<p>";
    echo "Bem-vindo, " . $_SESSION['adm'];
    $foto = imagemUsuario($_SESSION['adm']);
    if ($foto['imagem']){
        echo "<img src='" . $foto['imagem'] . "' width='200' style='border-radius: 50%; margin-left: 10px;'>";
    }
    echo "</p>";
    echo "<p>";
    echo "<a href='index.php?acao=logout'>Sair</a>";
    echo "</p>";
} else {
    include "views/login.php";
}