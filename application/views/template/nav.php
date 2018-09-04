   

   
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top navbar-default" id="menu">
  <!-- Brand -->
  		<a class="navbar-brand" href="#"><img class="logo" src="<?=base_url('assets/imgs/logo.png')?>"/></a>

  <!-- Links -->
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
  			<li class="nav-item">
      			<a class="nav-link" href="<?= base_url();?>">Página inicial</a><!--http://localhost/locadora"-->
    		</li>
    		<li class="nav-item dropdown">
      			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Filmes
      			</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= base_url('filme/listar');?>">Visualizar catalogo</a>
        				<a class="dropdown-item" href="<?= base_url('filme/cadastrar');?>">Cadastrar novos filmes</a>
      				</div>
    		</li>
    <!-- Dropdown -->
   			 <li class="nav-item dropdown">
      			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Atores
      			</a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= base_url('ator/listar');?>">Lista de atores</a>
        				<a class="dropdown-item" href="<?= base_url('ator/cadastrar');?>">Cadastrar novo ator</a>
      				</div>
    		</li>
  		</ul>

<!-- Dropdown -->
<ul class="navbar-nav">
	<li class="nav-item dropdown">
      			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				  <img class="img-circle" src="<?=base_url('assets/media/usuario/padrao.png')?>"  width="50"/>
      			</a>
      				<div class="dropdown-menu dropdown-menu-right">
        				<a class="dropdown-item" href="">NOME DO USUÁRIO</a>
        				<a class="dropdown-item" href="">SAIR</a>
      				</div>
    		</li>
			<li>
			</li>

  		</ul>
		    
	</nav>

    <div class="conteudo">