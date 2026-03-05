<h2>Novo Produto</h2>
<form method="POST" enctype="multipart/form-data">
Nome:
<input type="text" name="nome" required><br><br>
Descrição:
<input type="text" name="descricao" required><br><br>
Fornecedor:
<input type="text" name="fornecedor" required><br><br>
Quantidade:
<input type="number" name="quantidade" required><br><br>
Fabricante:
<input type="text" name="fabricante" required><br><br>
Preço:
<input type="number" step="0.01" name="preco" required><br><br>
Margem:
<input type="number" step="0.01" name="margem" required><br><br>
Data de Cadastro:
<input type="date" name="data_cadastro" required><br><br>
Status:
<select name="status_pro" required>
    <option value="Em estoque">Em estoque</option>
    <option value="Esgotado">Esgotado</option>
    <option value="Pedido">Pedido</option>
    <option value="Descontinuado">Descontinuado</option>
</select><br><br/>
Imagem: <input type="file" name="imagem"><br><br>

<button type="submit">Salvar</button>

</form>