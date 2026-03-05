<h2>Lista de Usuários</h2>
<a href="index.php?acao=criar">Novo Usuário</a>

<table border="01">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Imagem</th>
        <th>Ação</th>
    </tr>
<?php foreach ($usuarios as $u){ ?>
    <tr>
        <td><?php echo $u['id']; ?></td>
        <td><?php echo $u['nome']; ?></td>
        <td><?php echo $u['email']; ?></td>
        <td><?php echo $u['login']; ?></td>
        <td><?php echo $u['senha']; ?></td>
        <td>
            <?php if ($u['imagem']){ ?>
                <img src="<?php echo $u['imagem']; ?>" width="80">
            <?php } ?>
        </td>
        <td>
            <a href="index.php?acao=editar&id=<?php echo $u['id']; ?>">Editar</a> | 
            <a href="index.php?acao=excluir&id=<?php echo $u['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</a>
        </td>
    </tr>
<?php } ?>
</table>