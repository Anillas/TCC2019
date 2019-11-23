<?php
	require_once '../../controle/init.php';
	require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
		if ($_SESSION['user'] == "deslogado") {
			header("location: ../../index.php");
		}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include LIB_COMPLEMENTOS.DS.'head.php'; ?>
	<style type="text/css">
		label{
			font-size: 16px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php include "../complementos/menu.php"; ?>
	


<div class="pt-5 container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3 text-center">
            <div class="justify-content-center" style="display: inline-grid;">
        				  <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                  <a href="../../controle/redefine.php" class="btn"><button class="btn btn-danger mt-2 col-12">Sair</button></a>
      			</div><br>
			<!--ul class="list-group">
				<li class="list-group-item text-muted">Atividade <i class="fa fa-dashboard fa-1x"></i></li>
				<li class="list-group-item"><span class="pull-left"><strong>Salvos</strong></span> 125</li>
				<li class="list-group-item"><span class="pull-left"><strong>Favoritos</strong></span> 13</li>
			</ul--> 
          
        </div>



    	<div class="col-sm-9">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="pedidos" aria-selected="true">Pedidos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="reservar-tab" data-toggle="tab" href="#reservar" role="tab" aria-controls="reservar" aria-selected="false">A reservar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="false">Perfil</a>
  </li>
</ul>
        <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab">...</div>
  <div class="tab-pane fade" id="reservar" role="tabpanel" aria-labelledby="reservar-tab">...</div>
  <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="perfil-tab"><?php include_once LIB_PAGINAS.DS.'subPaginas_MC/perfil.php'; ?></div>
</div> 
      </div><!--/tab-pane-->
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

	<!--script type="text/javascript">
		$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
	</script-->	



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
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
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