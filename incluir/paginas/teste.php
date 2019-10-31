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
	<center>
		<br><br><br><br><br><br><br><br><br>
<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Popover dispensável" data-content="Aqui vai algum tipo de conteúdo. Muito da hora, né?!">Popover dispensável</a>
</center>
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function () {
  $('.popover-exemplo').popover({
    container: 'body'
  })
})
		$(function () {
  $('.popover-exemplo').popover({
    container: 'body'
  })
})
		$('.popover-dismiss').popover({
  trigger: 'focus'
})
	</script>
</body>
</html>