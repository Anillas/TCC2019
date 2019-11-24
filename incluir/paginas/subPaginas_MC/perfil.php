 <div class="row">
<form class="needs-validation" method="POST" action="configurar.php" novalidate style="display: inline-flex;">
   <div class="col-sm-3 text-center">
            <div class="justify-content-center" style="display: inline-grid;">
                  <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                  <a href="../../controle/redefine.php" class="btn"><button class="btn btn-danger mt-2 col-12">Sair</button></a>
            </div>
        </div>
        <div class="campos">
  				<div class="form-row">
    				<div class="col-md-4 mb-3">
				      <label for="nomeUsuario">Nome</label>
				      <?php
                echo '<input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" placeholder="Nome" value="'.$_SESSION['nomeUsuario'].'" required>';
              ?>
				      <div class="valid-feedback">
				        Bom!
				      </div>
				      <div class="invalid-feedback">
				        Insira seu nome.
				      </div>
    				</div>
    				<div class="col-md-4 mb-3">
				      <label for="sobrenomeUsuario">Sobrenome</label>
				      <?php
                echo '<input type="text" class="form-control" name="sobrenomeUsuario" id="sobrenomeUsuario" placeholder="Sobrenome" value="'.$_SESSION['sobrenomeUsuario'].'" required>';
              ?>
				      <div class="valid-feedback">
				        Bom!
				      </div>
				      <div class="invalid-feedback">
				        Insira seu sobrenome.
				      </div>
   					</div>
  					<div class="col-md-4 mb-3">
				      <label for="telefoneUsuario">Telefone</label>
              <?php
			 	       echo '<input type="text" class="form-control" name="telefoneUsuario" id="telefoneUsuario" placeholder="(00) 00000-0000" value="'.$_SESSION['telefoneUsuario'].'" required>';
               ?>
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
              <?php
				        echo '<input type="text" class="form-control" name="cpfUsuario" id="cpfUsuario" placeholder="000.000.000-00" readonly="true" value="'.$_SESSION['cpfUsuario'].'" required>';
              ?>
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
                <?php
	        			  echo '<input type="text" class="form-control rounded-right" name="novoUsuario" id="novoUsuario" placeholder="Username" aria-describedby="inputGroupPrepend" value="'.$_SESSION['usuario'].'" required>';
                ?>
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
      	<input type="password" class="form-control senha" name="novaSenha" id="novaSenha" placeholder="Senha" length="6"  maxlength="25" value="Essa não é a senha antiga" required>
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
      <?php
        echo '<input type="text" class="form-control" name="cepUsuario" id="cepUsuario" placeholder="00000-000" value="'.$_SESSION['cepUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um CEP válido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="estadoUsuario">Estado</label>
      <?php
        echo '<input type="text" class="form-control" name="estadoUsuario" id="estadoUsuario" placeholder="Estado" readonly="true" value="'.$_SESSION['estadoUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um estado válido.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="cidadeUsuario">Cidade</label>
      <?php
        echo '<input type="text" class="form-control" name="cidadeUsuario" id="cidadeUsuario" placeholder="Cidade" readonly="true" value="'.$_SESSION['cidadeUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma cidade válida.
      </div>
    </div>
  </div>
  <div class="form-row">
  	<div class="col-md-5 mb-3">
      <label for="bairroUsuario">Bairro</label>
      <?php
        echo '<input type="text" class="form-control" name="bairroUsuario" id="bairroUsuario" placeholder="Bairro" readonly="true" value="'.$_SESSION['bairroUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um bairro existente.
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="logradouroUsuario">Logradouro</label>
      <?php
        echo '<input type="text" class="form-control" name="logradouroUsuario" id="ruaUsuario" placeholder="Logradouro" readonly="true" value="'.$_SESSION['logradouroUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira uma rua existente.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="numeroUsuario">Número</label>
      <?php
        echo '<input type="text" class="form-control" name="numeroUsuario" id="numeroUsuario" placeholder="Número" pattern="[0-9]" value="'.$_SESSION['numeroUsuario'].'" required>';
      ?>
      <div class="valid-feedback">
        Bom!
      </div>
      <div class="invalid-feedback">
        Insira um número.
      </div>
    </div>
  </div>
  <div class="modal-footer form-group" style="margin-top: -30px; border: none;">
   <!--div class="col-xs-12">
        <br>
      	<button class="btn btn-lg btn-success" type="submit">Salvar</button>
       	<button class="btn btn-lg btn-danger" type="reset">Cancelar</button>
    </div-->
</div>
</div>
<!---            
  <div class="modal-footer" style="border-color: #ffc107;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </div-->
</form>
</div>