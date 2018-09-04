<div class="container">
	<h2>Catálogo de filmes</h2>
	<table class="table">
	   <?php foreach($filmes as $filme):  ?>
	   <tr>
	   		<td><img src="<?= base_url($filme->capa);?>" width="50"/></td>
	   		<td><?= $filme->titulo;?></td>
	   		<td><a href="<?= base_url();?>filme/detalhar/<?= $filme->id;?>">DETALHES</a></td>
	   		
	   </tr>
	   <?php endforeach?>
	   </table>
</div>
