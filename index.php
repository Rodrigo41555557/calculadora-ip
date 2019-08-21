
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Cálculo IP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body >
	<br>

<div class="container">

    <h3 class="aligner"> <b>Calculadora de IP</b> </h3>
    <h6 class="aligner">Digite o IP e sua Máscara</h6>


    <div id="divisor"></div>

    <nav class="navbar navbar-expand-lg navbar-primary  mx-auto" >						
			
		<form method="post" class="form-inline my-2 my-lg-0 mx-auto" action="">

			<ul class="navbar-nav mx-auto">

				<li class="nav-item">
					<ul class="nav-link text-light">
						<label>Grupo 1</label>
						<input type="number" name="grupo1" min="0" max="255" required="">
					</ul>
				</li>
				<li class="nav-item">
					<ul class="nav-link text-light">
						<label>Grupo 2</label>
						<input type="number" name="grupo2" min="0" max="255" required="">
					</ul>
				</li>
				<li class="nav-item">
					<ul class="nav-link text-light">
						<label>Grupo 3</label>
						<input type="number" name="grupo3" min="0" max="255" required="">
					</ul>
				</li>
				<li class="nav-item">
					<ul class="nav-link text-light">
						<label>Grupo 4</label>
						<input type="number" name="grupo4" min="0" max="255" required="">
					</ul>
				</li>

				<li class="nav-item">
					<ul class="nav-link text-light">
						<label>Máscara do IP</label>
						<input type="number" name="mascara" min="24" max="32" required="">
					</ul>
			    </li>

			</ul>

			<ul class="navbar-nav mx-auto">

			<li class="nav-item">
			    <ul class="nav-link text-dark">
			    	<input type="submit" name="ipenviado" value="Calcular" >
			    </ul>
			</li>

			</ul>

		</form>

	</nav>
<?php
	require 'funcip.php';
?>
</body>
</html>
