
<form action="/dados" method="post">
    <input type="submit" value="Clicar">
</form>

<form action="/produtos" method="post">
    @csrf
    <input type="submit" value="Cadastrar Produto">
</form>

<form action="/produtos/2" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Deletar Produto">
</form>

<form action="/produtos/7" method="post">
    @csrf
    @method('PUT')
    <input type="submit" value="Atualizar Produto">
</form>

