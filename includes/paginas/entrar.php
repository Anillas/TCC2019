<!DOCTYPE html>
<html>
<head>
	<?php include "../complementos/meta.php"; ?>
	<?php include "../complementos/link.php"; ?>
	<title>Entrar</title>
</head>
<body>
	<?php include "../complementos/menu_entrar.php"; ?>
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content text-warning" style="background-color: #343a40">
      	<div class="modal-header" style="border-color: #ffc107;">
        	<h5 class="modal-title" id="exampleModalCenterTitle">Cadastre-se</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true" style="color: white;">&times;</span>
        	</button>
      	</div>
      <div class="modal-body">
        <form class="needs-validation" method="POST" action="../banco/cadastro_usuario.php" novalidate>
  				<div class="form-row">
    				<div class="col-md-4 mb-3">
				      <label for="nomeUsuario">Nome</label>
				      <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" placeholder="Nome" autofocus required>
				      <div class="valid-feedback">
				        Bom!
				      </div>
				      <div class="invalid-feedback">
				        Insira seu nome.
				      </div>
    				</div>
    				<div class="col-md-4 mb-3">
				      <label for="sobrenomeUsuario">Sobrenome</label>
				      <input type="text" class="form-control" name="sobrenomeUsuario" id="sobrenomeUsuario" placeholder="Sobrenome" required>
				      <div class="valid-feedback">
				        Bom!
				      </div>
				      <div class="invalid-feedback">
				        Insira seu sobrenome.
				      </div>
   					</div>
  					<div class="col-md-4 mb-3">
				      <label for="telefoneUsuario">Telefone</label>
				      <input type="text" class="form-control" name="telefoneUsuario" id="telefoneUsuario" placeholder="(00) 00000-0000" required>
				      <div class="valid-feedback">
				        Bom!
				      </div>
				      <div class="invalid-feedback">
				        Insira seu telefone.
				      </div>
    				</div>
  				</div>
  				<div class="form-row">
    				<div class="col-md-5 mb-3">
	      			<label for="novoUsuario">Username</label>
	      			<div class="input-group">
	        			<div class="input-group-prepend">
			          	<span class="input-group-text" id="inputGroupPrepend">@</span>
			        	</div>
	        			<input type="text" class="form-control rounded-right" name="novoUsuario" id="novoUsuario" placeholder="Username" aria-describedby="inputGroupPrepend" required>
				        <div class="valid-feedback">
				          Bom!
				        </div>
				        <div class="invalid-feedback">
				          Escolha um nome de usuário.
				        </div>
	      			</div>
    				</div>
    <div class="col-md-4 mb-3">
      <label for="novaSenha">Senha</label>
      <input type="text" class="form-control" name="novaSenha" id="novaSenha" placeholder="Senha" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma senha.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="cidadeUsuario">Cidade</label>
      <input type="text" class="form-control" name="cidadeUsuario" id="cidadeUsuario" placeholder="Cidade" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma cidade válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="estadoUsuario">Estado</label>
      <input type="text" class="form-control" name="estadoUsuario" id="estadoUsuario" placeholder="Estado" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um estado válido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="cepUsuario">CEP</label>
      <input type="text" class="form-control" name="cepUsuario" id="cepUsuario" placeholder="00000-000" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um CEP válido.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="aceitarTermos" required>
    <label class="custom-control-label" for="aceitarTermos">Eu aceito os Termos e Condições.</label>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Você deve aceitar os termos e condições antes de se cadastrar
      </div>
    </div>
  </div>
  <div class="modal-footer" style="border-color: #ffc107;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!--Código para logar-->
<div class="mx-auto col-md-4">
<div class="card" style="background-color: #343a40;">
  <div class="card-header">
    <h5 class="text-warning">
      Entre e divirta-se!
    </h5>
  </div>
  <div class="card-body">
	<form class="mx-auto needs-validation" method="POST" action="../banco/processo_entrar.php" novalidate>
  	<div class="mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control rounded-right" placeholder="Username" aria-describedby="inputGroupPrepend" name="usuario" autofocus required>
        <div class="invalid-feedback">
          Preencha este campo!
        </div>
      </div>
    </div>
  <div class="mb-3">
      <input type="password" class="form-control" placeholder="Senha" name="senha" required>
      <div class="invalid-feedback">
        Preencha este campo!
      </div>
  </div>
  <button type="button" class="btn btn-danger col-md-5 mb-2">Sair</button>
  <button type="submit" class="btn btn-success col-md-5 justify-content-end" style="float: right;">Entrar</button>
</form>
</div>
</div>
</div>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
  <script type="text/javascript" src="../jQuery/jquery.mask.min.js"></script>
  <script type="text/javascript" src="../jQuery/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">
    $(":input").inputmask();
    $("#telefoneUsuario").inputmask({"mask": "(99) 99999-9999"})
    $(":input").inputmask();
    $("#cepUsuario").inputmask({"mask": "99999-999"})
  </script>
  <script type="text/javascript">
    $('.popover-dismiss').popover({
  trigger: 'focus'
})
  </script>
	<script type="text/javascript">
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
	</script>
</body>
</html>