<h2>Novo Usuário</h2>

<form method="POST" enctype="multipart/form-data">

Nome: <input type="text" name="nome" required><br><br>
Email: <input type="email" name="email" required><br><br>
Login: <input type="text" name="login" required><br><br>
Senha: <input type="password" name="senha" required><br><br>
Papel: 
<select name="papel" required>
    <option value="">Selecione</option>
    <option value="adm">Administrador</option>
    <option value="user">Usuário</option>
</select><br><br>
Imagem: <input type="file" name="imagem"><br><br>

<button type="submit">Salvar</button>

</form>