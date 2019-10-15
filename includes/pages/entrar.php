<!DOCTYPE html>
<html>
<head>
	<?php include "../complements/meta.php"; ?>
	<?php include "../complements/link.php"; ?>
	<title>Entrar</title>
</head>
<body>
	<?php include "../complements/menu_entrar.php"; ?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Cadastre-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira seu nome.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Sobrenome</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira seu sobrenome.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomTelefone">Telefone</label>
      <input type="number" class="form-control" id="validationCustomTelefone" placeholder="(00) 00000-0000" required>
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
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control rounded-right" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Bom!
        </div>
        <div class="invalid-feedback">
          Escolha um nome de usuário.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomSenha">Senha</label>
      <input type="text" class="form-control" id="validationCustomSenha" placeholder="Senha" required>
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
      <label for="validationCustom03">Cidade</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma cidade válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Estado</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um estado válido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">CEP</label>
      <input type="number" class="form-control" id="validationCustom05" placeholder="00000-000" style="-webkit-appearance: none;" required>
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
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label" for="customControlValidation1">Eu aceito os Termos e Condições.</label>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Você deve aceitar os termos e condições antes de se cadastrar
      </div>
    </div>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
<!--Código para logar-->
<div class="mx-auto col-4">
<div class="card" style="background-color: #343a40;">
  <div class="card-header">
    <h5 class="text-warning">
      Entre e divirta-se!
    </h5>
  </div>
  <div class="card-body">
	<form class="mx-auto needs-validation" novalidate>
  	<div class="mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control rounded-right" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Preencha este campo!
        </div>
      </div>
    </div>
  <div class="mb-3">
      <input type="password" class="form-control" placeholder="Senha" required>
      <div class="invalid-feedback">
        Preencha este campo!
      </div>
  </div>
  <button type="button" class="btn btn-danger col-4">Sair</button>
  <button type="submit" class="btn btn-success col-4 justify-content-end" style="float: right;">Entrar</button>
</form>
</div>
</div>
</div>
	<?php include "../complements/footer.php"; ?>
	<?php include "../complements/script.php"; ?>
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