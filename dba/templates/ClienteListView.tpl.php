<?php
	$this->assign('title','Gerenciador do Banco de Dados - Canis | Clientes');
	$this->assign('nav','clientes');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/clientes.js").wait(function(){
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

<h1>
	<i class="fas fa-database" style="color: #000;"></i> Clientes
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Pesquisar..." />
		<button class='btn-botao add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="clienteCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Nomeusuario">Nome<% if (page.orderBy == 'Nomeusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Sobrenomeusuario">Sobrenome<% if (page.orderBy == 'Sobrenomeusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Telefoneusuario">Telefone<% if (page.orderBy == 'Telefoneusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Cpfusuario">CPF<% if (page.orderBy == 'Cpfusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Usuario">Usuário<% if (page.orderBy == 'Usuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<th id="header_Senha">Senha<% if (page.orderBy == 'Senha') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Cepusuario">CEP<% if (page.orderBy == 'Cepusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Estadousuario">Estado<% if (page.orderBy == 'Estadousuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Cidadeusuario">Cidade<% if (page.orderBy == 'Cidadeusuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Bairrousuario">Bairro<% if (page.orderBy == 'Bairrousuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Logradourousuario">Logradouro<% if (page.orderBy == 'Logradourousuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Numerousuario">Numero<% if (page.orderBy == 'Numerousuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Imagem">Imagem<% if (page.orderBy == 'Imagem') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
-->
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('cpfusuario')) %>">
				<td><%= _.escape(item.get('nomeusuario') || '') %></td>
				<td><%= _.escape(item.get('sobrenomeusuario') || '') %></td>
				<td><%= _.escape(item.get('telefoneusuario') || '') %></td>
				<td><%= _.escape(item.get('cpfusuario') || '') %></td>
				<td><%= _.escape(item.get('usuario') || '') %></td>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<td><%= _.escape(item.get('senha') || '') %></td>
				<td><%= _.escape(item.get('cepusuario') || '') %></td>
				<td><%= _.escape(item.get('estadousuario') || '') %></td>
				<td><%= _.escape(item.get('cidadeusuario') || '') %></td>
				<td><%= _.escape(item.get('bairrousuario') || '') %></td>
				<td><%= _.escape(item.get('logradourousuario') || '') %></td>
				<td><%= _.escape(item.get('numerousuario') || '') %></td>
				<td><%= _.escape(item.get('imagem') || '') %></td>
-->
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="clienteModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="nomeusuarioInputContainer" class="control-group">
					<label class="control-label" for="nomeusuario">Nome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nomeusuario" placeholder="Nome" value="<%= _.escape(item.get('nomeusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="sobrenomeusuarioInputContainer" class="control-group">
					<label class="control-label" for="sobrenomeusuario">Sobrenome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="sobrenomeusuario" placeholder="Sobrenome" value="<%= _.escape(item.get('sobrenomeusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="telefoneusuarioInputContainer" class="control-group">
					<label class="control-label" for="telefoneusuario">Telefone</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="telefoneusuario" placeholder="(00) 00000-0000" value="<%= _.escape(item.get('telefoneusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cpfusuarioInputContainer" class="control-group">
					<label class="control-label" for="cpfusuario">CPF</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cpfusuario" placeholder="CPF" value="<%= _.escape(item.get('cpfusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="usuarioInputContainer" class="control-group">
					<label class="control-label" for="usuario">Usuário</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="usuario" placeholder="Usuário" value="<%= _.escape(item.get('usuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="senhaInputContainer" class="control-group">
					<label class="control-label" for="senha">Senha</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="senha" placeholder="Senha" value="<%= _.escape(item.get('senha') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cepusuarioInputContainer" class="control-group">
					<label class="control-label" for="cepusuario">CEP</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cepusuario" placeholder="CEP" value="<%= _.escape(item.get('cepusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="estadousuarioInputContainer" class="control-group">
					<label class="control-label" for="estadousuario">Estado</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="estadousuario" placeholder="Estado" value="<%= _.escape(item.get('estadousuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cidadeusuarioInputContainer" class="control-group">
					<label class="control-label" for="cidadeusuario">Cidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cidadeusuario" placeholder="Cidade" value="<%= _.escape(item.get('cidadeusuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="bairrousuarioInputContainer" class="control-group">
					<label class="control-label" for="bairrousuario">Bairro</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="bairrousuario" placeholder="Bairro" value="<%= _.escape(item.get('bairrousuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="logradourousuarioInputContainer" class="control-group">
					<label class="control-label" for="logradourousuario">Logradouro</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="logradourousuario" placeholder="Logradouro" value="<%= _.escape(item.get('logradourousuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="numerousuarioInputContainer" class="control-group">
					<label class="control-label" for="numerousuario">Número</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="numerousuario" placeholder="Número" value="<%= _.escape(item.get('numerousuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="imagemInputContainer" class="control-group">
					<label class="control-label" for="imagem">Imagem</label>
					<div class="controls inline-inputs">
						<input type="file" class="input-xlarge" id="imagem" placeholder="Imagem" value="<%= _.escape(item.get('imagem') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteClienteButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteClienteButton" class="btn-botao btn-botao-mini btn-botao-danger"><i class="icon-trash icon-white"></i> Deletar Cliente</button>
						<span id="confirmDeleteClienteContainer" class="hide">
							<button id="cancelDeleteClienteButton" class="btn-botao btn-botao-mini">Cancelar</button>
							<button id="confirmDeleteClienteButton" class="btn-botao btn-botao-mini btn-botao-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="clienteDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Cliente
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="clienteModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn-botao btn-botao-danger" data-dismiss="modal" >Cancelar</button>
			<button id="saveClienteButton" class="btn-botao btn-botao-link">Salvar Alterações</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="clienteCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newClienteButton" class="btn-botao btn-botao-primary">Adicionar</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
