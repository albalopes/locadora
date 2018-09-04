<div class="container">
<h2><a href="<?= base_url('filme/listar')?>">Filmes</a></h2>
<h3><?= $filme->titulo;?></h3>
	<table class="table">
		<tr>
			<th>Capa</th>
			<th>Título</th>
			<th>Descrição</th>
			<th>Ano de Lançamento</th>
			<th>Duração</th>
			<th>Categoria</th>



	   </tr>
	   <tr>
	   		<td><img src="<?= base_url($filme->capa);?>" width="100"/></td>
	   		<td><?= $filme->titulo;?></td>
	   		<td><?= $filme->descricao;?></td>
	   		<td><?= $filme->anodelancamento;?></td>
	   		<td><?= $filme->duracao;?></td>
	   		<td><?= $filme->categoria;?></td>
	   </tr>
	   </table>
</div>