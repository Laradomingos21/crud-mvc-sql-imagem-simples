<?php

    function conectar() {
        $con = mysqli_connect("localhost", "root", "123456", "bd_loja_mvc", 3307);
        return $con; 
    }