<h2>Login Sistema</h2>
    <?php if (isset($erro)){ ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php } ?>
<form class="login" action="index.php?acao=login" method="POST">
    Login:
    <input type="text" placeholder="Username" name="login"><br><br>
    Senha: 
    <input type="password" placeholder="Password" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>