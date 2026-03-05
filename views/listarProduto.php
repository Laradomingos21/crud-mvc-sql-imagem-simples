<h2>Lista de Produto</h2>
<a href="index.php?acao=criarProduto">Novo Produto</a>

<table border="01">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Fornecedor</th>
        <th>Quantidade</th>
        <th>Fabricante</th>
        <th>Preço</th>
        <th>Preço de venda</th>
        <th>Data de Cadastro</th>
        <th>Status</th>
        <th>Imagem</th>
        <th>Ação</th>
    </tr>
<?php foreach ($usuarios as $u){ ?>
    <tr>
        <td><?php echo $u['id']; ?></td>
        <td><?php echo $u['nome']; ?></td>
        <td><?php echo $u['descricao']; ?></td>
        <td><?php echo $u['fornecedor']; ?></td>
        <td><?php echo $u['quantidade']; ?></td>
        <td><?php echo $u['fabricante']; ?></td>
        <td><?php echo $u['preco']; ?></td>
        <td><?php echo $u['margem']*$u['preco']; ?></td>
        <td><?php echo $u['data_cadastro']; ?></td>
        <td><?php echo $u['status_pro']; ?></td>
        <td>
            <?php if ($u['imagem']){ ?>
                <img src="<?php echo $u['imagem']; ?>" width="80">
            <?php } ?>
        </td>
        <td>
            <a href="index.php?acao=editarProduto&id=<?php echo $u['id']; ?>">Editar</a> | 
            <a href="index.php?acao=excluirProduto&id=<?php echo $u['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</a>
        </td>
    </tr>
<?php } ?>
</table>