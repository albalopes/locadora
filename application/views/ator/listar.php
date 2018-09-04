<div class="container">
<h2>Lista de atores</h2>
	<table class="table">
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>

	   </tr>
	   <?php foreach($atores as $ator):  ?>
	   <tr>
	   		<td><?= $ator->nome;?></td>
	   		<td><?= $ator->sobrenome;?></td>
	   </tr>
	   <?php endforeach?>
	   </table>
</div>