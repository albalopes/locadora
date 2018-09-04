<div class="container">
	<form class="formulario" action="<?= base_url();?>filme/salvar" method="post">
		<h2>Cadastre um novo filme</h2>
		<hr>
		<label>Título: </label>
		<input type="text" name="titulo">
		<br/>
		<label>Descrição: </label>
		<textarea name="descricao"></textarea>
		<br/>
		<label>Ano de lançamento: </label>
		<input class= "lancamento" type="text" name="anodelancamento">
		<br/>
		<label>Duração do filme: </label>
		<input type="text" name="duracao">
		<br/>
		<label>Categoria: </label>
		<input type="text" name="categoria">
		<br/>
		<button class="btn btn-dark">Cadastrar</button>
	</form>
	</div>