<h2>Alterar</h2>


<form method="post" action="?acao=alterar">

    <label for="nome">Nome</label>
    <input type="hidden" value="<?= $categoria->getId()  ?>">
    <input type="text" name="nome" id="nome"/>
    <br>
    <label for="descricao">Descricao</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"><?= $categorias->getNome()?></textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar">
</form>