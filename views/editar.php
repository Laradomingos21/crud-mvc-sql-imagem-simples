<h2>Editar Usuario</h2>

<form method="POST" enctype="multipart/form-data">

Nome: 
<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br><br>
Email:
 <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br><br>
Login:
 <input type="text" name="login" value="<?php echo $usuario['login'];
    ?>" required><br><br>
Senha:
 <input type="password" name="senha" value="<?php echo $usuario['senha'];
    ?>" required><br><br>
    
<?php if ($usuario['imagem']){ ?>
    <img src="<?php echo $usuario['imagem']; ?>" width="100"><br><br>
<?php }; ?>

Nova Imagem:
 <input type="file" name="imagem"><br><br>

<input type="hidden" name="imagem_atual" value="<?php echo $usuario['imagem']; ?>">

<button type="submit">Atualizar</button>

</form>