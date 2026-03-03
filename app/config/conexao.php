<?php
function conectar() {
    $con = mysqli_connect("localhost", "root", "123456", "bd_loja_mvc", 3307);
    if (!$con) {
        die("Erro na conexão com o banco!");
    }
    return $con;
}
?>