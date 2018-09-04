
<div class="container">
	<form class="formulario" action="<?= base_url();?>ator/salvar" method="post">
		<h2>Cadastre um novo ator</h2>
		<hr>
		<label>Nome: </label>
		<input type="text" name="nome">
		<br/>
		<label>Sobrenome: </label>
		<input type="text" name="sobrenome">
		<br/>
		<button class="btn btn-dark">Cadastrar</button>
	</form>
</div>