<body>

	<h1>Détails</h1>

	<div class='containerSpaceBetween littleContainer'>
		<h2>Enseignant : <?php  echo $data['teaFirstname'] . ' ' .  $data['teaName'] ?></h2>

		<h2><?php  echo $data['secName'] ?></h2>

		<div class='containerAlignRight'>
			<a class='marginSide1'>Modifier</a>
			<a class='marginSide1'>Supprimer </a>
		</div>
	</div>

	<div class='littleContainer containerAlignRight'>
		
	</div>

	<p>Surnom : <?php  echo $data['teaNickname'] ?></p>

	<p><?php  echo $data['teaOrigine'] ?></p>

</body>
