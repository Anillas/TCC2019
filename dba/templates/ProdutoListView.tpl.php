<?php
	$this->assign('title','Gerenciador do Banco de Dados - Canis | Produtos');
	$this->assign('nav','produtos');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/produtos.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1 class="dados">
	<div class="loader-banco">
		<div class="loader-tabela">
			<i class="fas fa-database" style="color: #000;"></i> Produtos
		</div>
		<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	</div>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Pesquisar..." />
		<button class='btn-pesquisa add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="produtoCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Id">Id<% if (page.orderBy == 'Id') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Nome">Nome<% if (page.orderBy == 'Nome') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Tipo">Tipo<% if (page.orderBy == 'Tipo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Descricao">Descrição<% if (page.orderBy == 'Descricao') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
<!-- Ocultando as demais colunas
				<th id="header_Preco">Preço<% if (page.orderBy == 'Preco') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Quantidade">Quantidade<% if (page.orderBy == 'Quantidade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Imagem">Imagem<% if (page.orderBy == 'Imagem') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
-->
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('id')) %>">
				<td><%= _.escape(item.get('id') || '') %></td>
				<td><%= _.escape(item.get('nome') || '') %></td>
				<td><%= _.escape(item.get('tipo') || '') %></td>
				<td><%= _.escape(item.get('descricao') || '') %></td>
<!-- Ocultando as demais colunas
				<td><%= _.escape(item.get('preco') || '') %></td>
				<td><%= _.escape(item.get('quantidade') || '') %></td>
				<td><%= _.escape(item.get('imagem') || '') %></td>
-->
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="produtoModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idInputContainer" class="control-group">
					<label class="control-label" for="id">Id</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="id"><%= _.escape(item.get('id') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nomeInputContainer" class="control-group">
					<label class="control-label" for="nome">Nome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nome" placeholder="Nome" value="<%= _.escape(item.get('nome') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="tipoInputContainer" class="control-group">
					<label class="control-label" for="tipo">Tipo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="tipo" placeholder="Tipo" value="<%= _.escape(item.get('tipo') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="descricaoInputContainer" class="control-group">
					<label class="control-label" for="descricao">Descrição</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="descricao" placeholder="Descrição" value="<%= _.escape(item.get('descricao') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="precoInputContainer" class="control-group">
					<label class="control-label" for="preco">Preço</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="preco" placeholder="Preço" value="<%= _.escape(item.get('preco') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="quantidadeInputContainer" class="control-group">
					<label class="control-label" for="quantidade">Quantidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="quantidade" placeholder="Quantidade" value="<%= _.escape(item.get('quantidade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="imagemInputContainer" class="control-group">
					<label class="control-label" for="imagem">Imagem</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="imagem" placeholder="Imagem" value="<%= _.escape(item.get('imagem') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteProdutoButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteProdutoButton" class="btn-botao btn-mini btn-botao-danger"><i class="icon-trash icon-white" data-toggle="modal" data-target="#exampleModal"></i> Deletar Produto</button>
						<span id="confirmDeleteProdutoContainer" class="hide">
							<br><br>
							<button id="cancelDeleteProdutoButton" class="btn-botao btn-botao-primary btn-mini">Cancelar</button>
							<button id="confirmDeleteProdutoButton" class="btn-botao btn-mini btn-botao-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="produtoDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Produto
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="produtoModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn-botao btn-botao-danger" data-dismiss="modal" >Cancelar</button>
			<button id="saveProdutoButton" class="btn-botao btn-botao-success">Salvar Alterações</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="produtoCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newProdutoButton" class="btn-botao btn-botao-primary">Adicionar Produto</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
