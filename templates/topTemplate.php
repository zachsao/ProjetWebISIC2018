<div id='header'>
	<h1>Bonjour <?php if(isset($_GET['user'])) echo $_GET['user'];
			else echo Request::getCurrentRequest()->getControllerName(); ?></h1>
</div>