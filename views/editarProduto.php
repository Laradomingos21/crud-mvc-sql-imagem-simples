<h2>Editar Produto</h2>

<form method="POST" enctype="multipart/form-data">

Nome:
<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br><br>
Descrição:
<input type="text" name="descricao" value="<?php echo $usuario['descricao']; ?>" required><br><br>
Fornecedor:
<input type="text" name="fornecedor" value="<?php echo $usuario['fornecedor']; ?>" required><br><br>
Quantidade:
<input type="number" name="quantidade" value="<?php echo $usuario['quantidade']; ?>" required><br><br>
Fabricante:
<input type="text" name="fabricante" value="<?php echo $usuario['fabricante']; ?>" required><br><br>
Preço:
<input type="number" step="0.01" name="preco" value="<?php echo $usuario['preco']; ?>" required><br><br>
Margem:
<input type="number" step="0.01" name="margem" value="<?php echo $usuario['margem']; ?>" required><br><br>
Data de Cadastro:
<input type="date" name="data_cadastro" value="<?php echo $usuario['data_cadastro']; ?>" required><br><br>
Status:
<select name="status_pro" required>
    <option value="">Selecione</option>
    <option value="Em estoque" <?php if ($usuario['status_pro'] == 'Em estoque') echo 'selected'; ?>>Em estoque</option>
    <option value="Esgotado" <?php if ($usuario['status_pro'] == 'Esgotado') echo 'selected'; ?>>Esgotado</option>
    <option value="Pedido" <?php if ($usuario['status_pro'] == 'Pedido') echo 'selected'; ?>>Pedido</option>
    <option value="Descontinuado" <?php if ($usuario['status_pro'] == 'Descontinuado') echo 'selected'; ?>>Descontinuado</option>
</select><br><br>
    
<?php if ($usuario['imagem']){ ?>
    <img src="<?php echo $usuario['imagem']; ?>" width="100"><br><br>
<?php }; ?>

Nova Imagem:
 <input type="file" name="imagem"><br><br>

<input type="hidden" name="imagem_atual" value="<?php echo $usuario['imagem']; ?>">

<button type="submit">Atualizar</button>

</form>