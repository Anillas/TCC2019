<?php ob_start() ?>
<?php
  require_once '../../controle/init.php';
  require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php include LIB_COMPLEMENTOS.DS.'head.php'; ?>
</head>
<body>
	<?php include "../complementos/menu.php"; ?>
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
        <form class="needs-validation" method="POST" action="configurar.php" novalidate>
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
            <div class="col-md-4 mb-3">
              <label for="cpfUsuario">CPF</label>
              <input type="text" class="form-control" name="cpfUsuario" id="cpfUsuario" placeholder="000.000.000-00" required>
              <div class="valid-feedback">
                Bom!
              </div>
              <div class="invalid-feedback">
                Insira um CPF válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
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
        <label class="lsa" id="lsa">Senha</label>
        <label id="senhaBarra" class="progress mb-2" style="display: none; height: 34.5%;">
          <div id="senhaForca" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
          </div>
        </label>
        <div class="input-group-senha">
        <input type="password" class="form-control senha" name="novaSenha" id="novaSenha" placeholder="Senha" required>
        <div class="addon-g">
        <i class="fas fa-eye-slash addon"></i>
        <i class="fas fa-eye addon" id="olho"></i>
      </div>
      
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma senha.
      </div>
    </div>
    </div>



  </div>
  <div class="form-row">
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
    <div class="col-md-6 mb-3">
      <label for="cidadeUsuario">Cidade</label>
      <input type="text" class="form-control" name="cidadeUsuario" id="cidadeUsuario" placeholder="Cidade" readonly="true" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma cidade válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="estadoUsuario">Estado</label>
      <input type="text" class="form-control" name="estadoUsuario" id="estadoUsuario" placeholder="Estado" readonly="true" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um estado válido.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="bairroUsuario">Bairro</label>
      <input type="text" class="form-control" name="bairroUsuario" id="bairroUsuario" placeholder="Bairro" readonly="true" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um bairro existente.
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="ruaUsuario">Rua</label>
      <input type="text" class="form-control" name="ruaUsuario" id="ruaUsuario" placeholder="Rua" readonly="true" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma rua existente.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="estadoUsuario">Número</label>
      <input type="number" class="form-control" name="estadoUsuario" id="estadoUsuario" placeholder="Número" required>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um número.
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
	<form class="mx-auto needs-validation" method="POST" action="entrar.php" novalidate>
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
  <a href="../../index.php">
  <button type="button" class="btn btn-danger col-md-5 mb-2">Sair</button>
</a>
  <button type="submit" class="btn btn-success col-md-5 justify-content-end" style="float: right;">Entrar</button>
</form>
<?php include '../banco/login.php'; ?>
</div>
</div>
</div>
	<?php include "../complementos/footer.php"; ?>
  <script src="../jQuery/jquery.apigs.min.js"></script>
  <script>
var senha = $('#novaSenha');
var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});

olho.mouseout(function() { 
  senha.attr("type", "password");
});

senha.bind('paste', function(e) {
  e.preventDefault();
});
</script>


<script type="text/javascript">
  //Necessita do bootstrap e jquery
//forca da senha
$(function (){
  $('#novaSenha').keyup(function (e){
      var senha = $(this).val();        
      if(senha == ''){
        $('#senhaBarra').hide();
        $('#lsa').css('display', 'block');
      }else{
        var fSenha = forcaSenha(senha);
        var texto = "";
        $('#lsa').css('display', 'none');
        $('#senhaForca').css('width', fSenha+'%');
        $('#senhaForca').removeClass();
        $('#senhaForca').addClass('progress-bar');
        if(fSenha <= 40){
            texto = 'Fraca';
            $('#senhaForca').addClass('bg-danger');
        }
        
        if(fSenha > 40 && fSenha <= 70){
            texto = 'Media';
            $('#senhaForca').addClass('bg-warning');
        }
        
        if(fSenha > 70 && fSenha <= 90){
            texto = 'Boa';
            $('#senhaForca').addClass('bg-info');
        }
        
        if(fSenha > 90){
            texto = 'Muito boa';
            $('#senhaForca').addClass('bg-success');
        }
        
        $('#senhaForca').text(texto);
        
        $('#senhaBarra').show();
      }
    });
});
    $('#novaSenha').focusout(function() { 
  $('#lsa').css('display', 'block');
  $('#senhaBarra').hide();
});
function forcaSenha(senha){
    var forca = 0;
    
    var regLetrasMa     = /[A-Z]/;
    var regLetrasMi     = /[a-z]/;
    var regNumero       = /[0-9]/;
    var regEspecial     = /[!@#$%&*?]/;
    
    var tam         = false;
    var tamM        = false;
    var letrasMa    = false;
    var letrasMi    = false;
    var numero      = false;
    var especial    = false;

//    console.clear();
//    console.log('senha: '+senha);

    if(senha.length >= 6) tam = true;
    if(senha.length >= 10) tamM = true;
    if(regLetrasMa.exec(senha)) letrasMa = true;
    if(regLetrasMi.exec(senha)) letrasMi = true;
    if(regNumero.exec(senha)) numero = true;
    if(regEspecial.exec(senha)) especial = true;
    
    if(tam) forca += 10;
    if(tamM) forca += 10;
    if(letrasMa) forca += 10;
    if(letrasMi) forca += 10;
    if(letrasMa && letrasMi) forca += 20;
    if(numero) forca += 20;
    if(especial) forca += 20;
        
//    console.log('força: '+forca);
    
    return forca;
}
</script>
	<?php include "../complementos/script.php"; ?>
  <script type="text/javascript" src="../jQuery/jquery.mask.min.js"></script>
  <script type="text/javascript" src="../jQuery/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">
    $(":input").inputmask();
    $("#telefoneUsuario").inputmask({"mask": "(99) 99999-9999"})
    $(":input").inputmask();
    $("#cpfUsuario").inputmask({"mask": "999.999.999-99"})
    $(":input").inputmask();
    $("#cepUsuario").inputmask({"mask": "99999-999"})
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

<!--POPOVER-->
<script type="text/javascript" src="../jQuery/jquery.popover.js"></script>
  <script type='text/javascript'>
$(function () {
  $('[data-toggle="popover"]').popover({
    container: 'body'
  })
})
</script>


<!-- Adicionando JQuery -->
    <script src="../jQuery/jquery.apipc.min.js"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#ruaUsuario").val("");
                $("#bairroUsuario").val("");
                $("#cidadeUsuario").val("");
                $("#estadoUsuario").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cepUsuario").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#ruaUsuario").val("...");
                        $("#bairroUsuario").val("...");
                        $("#cidadeUsuario").val("...");
                        $("#estadoUsuario").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#ruaUsuario").val(dados.logradouro);
                                $("#bairroUsuario").val(dados.bairro);
                                $("#cidadeUsuario").val(dados.localidade);
                                $("#estadoUsuario").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>


</body>
</html>