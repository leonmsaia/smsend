<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Envio de SMS con PHP</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
		<style>
			.container {
				width:750px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<form id="smsForm" action="process.php" method="post">
						<legend>Envio de SMS</legend>
						<div class="form-group">
							<label for="CountryCode">Codigo de Pais:</label>
							<input type="text" class="form-control" id="CountryCode" name="CountryCode" placeholder="Ingrese el Codigo de Pais...">
						</div>
						<div class="form-group">
							<label for="PhoneNumber">Numero de Celular*</label>
							<input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="Ingrese el numero de Celular...">
							<p class="help-block">* Ingreselo sin guiones ni espacios en blanco, ejemplo: 1120214444</p>
						</div>
						<div class="form-group">
							<label for="TxtMsg">Mensaje*</label>
							<input type="text" class="form-control" id="TxtMsg" name="TxtMsg" placeholder="Ingrese el Mensaje...">
							<p class="help-block">* Un Máximo de 25 Caraceteres.</p>
						</div>
						<input class="btn btn-primary" type="submit" value="Enviar SMS">
					</form>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery.validate.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Common Scripts-->
		<script src="assets/js/scripts.js"></script>
	</body>
</html>