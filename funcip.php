<?php

//recebe dados do formulario e faz os calculos


	$grupo1  = (int)$_POST['grupo1'];
	$grupo2  = (int)$_POST['grupo2'];
	$grupo3  = (int)$_POST['grupo3'];
	$grupo4  = (int)$_POST['grupo4'];
	$mascara = (int)$_POST['mascara'];

	$bits = 32 - $mascara;
	$ipsPorRede = pow(2, $bits);
	$subredes = 256/$ipsPorRede;
	$mascDecimal = 256 - $ipsPorRede;

	$redes = (int)($grupo4/$ipsPorRede);
	$endRede = $redes*$ipsPorRede;
	$endBroadcast = $endRede+$ipsPorRede - 1;
	
	$primIP = $redes*$ipsPorRede + 1;
	$ultIP = $endBroadcast - 1;

	function classeIP($grupo1){
		
		if ($grupo1 >= "0" and $grupo1 <= "126") {
			$classe = "A";
		}elseif ($grupo1 >= "128" and $grupo1 <= "191") {
			$classe = "B";
		}elseif ($grupo1 >= "192" and $grupo1 <= "223") {
			$classe = "C";
		}elseif ($grupo1 >= "224" and $grupo1 <= "239") {
			$classe = "D";
		}elseif ($grupo1 >= "240" and $grupo1 <= "255") {
			$classe = "E";
		}else{
			$classe = "Localhost, Não pertence à nenhuma classe";
		}
		return $classe;
	}

	
	if ($mascara = 31){
		$primIP = $endRede;
		$ultIP = $endBroadcast;
	}
?>

	<nav class="navbar  navbar-light mx-auto bordao" >                      
				
			<form method="post" class="form-inline my-2 my-lg-0 mx-auto" action="">

				<ul class="navbar-nav mx-auto">

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h4>Resultados para o IP: <?= $grupo1.".".$grupo2.".".$grupo3.".".$grupo4." /".$mascara ?></h4>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Hosts para rede: <?= $ipsPorRede ?></h8>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Número de Sub-redes: <?= $subredes ?></h8>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Número de Redes: <?= $redes ?></h8>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Endereço de rede: <?= $grupo1.".".$grupo2.".".$grupo3.".".$endRede ?></h8>
						</ul>
					</li>
					
					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Endereço Broadcast: <?= $grupo1.".".$grupo2.".".$grupo3.".".$endBroadcast ?></h8>
						</ul>
					</li>
					
					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Classe do IP: <?= classeIP($grupo1) ?></h8>
						</ul>
					</li>


					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Primeiro IP Válido: <?= $grupo1.".".$grupo2.".".$grupo3.".".$primIP ?></h8>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Último IP Válido: <?= $grupo1.".".$grupo2.".".$grupo3.".".$ultIP ?></h8>
						</ul>
					</li>

					<li class="nav-item mx-auto">
						<ul class="nav-link text-light">
							<h8>Máscara: 255.255.255.<?= $mascDecimal ?></h8>
						</ul>
					</li>

				</ul>

			</form>

		</nav>





