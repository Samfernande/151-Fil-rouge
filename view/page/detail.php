<body>

	<h1>Détails</h1>

	<div class='containerSpaceBetween littleContainer'>
		<h2>Enseignant : <?php  echo $data['teaFirstname'] . ' ' .  $data['teaName'] ?></h2>

		<h3><?php  echo $data['secName'] ?></h3>

		<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {  ?>

			<div class='containerAlignRight'>
				<p><a class='marginSide1' href = <?php echo "?link=updateTeacher&idTeacher=" . $data['idTeacher'] ?>>Modifier</a></p>
				<p><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?')" class='marginSide1 alignRight' href = <?php echo "?link=detail&delete=yes&idTeacher=" . $data['idTeacher'] ?>>Supprimer</a> </p>
			</div>

		<?php }  ?>
	</div>

	<div class='littleContainer containerAlignRight'>
		
	</div>

	<p>Surnom : <?php  echo $data['teaNickname'] ?></p>

	<p><?php  echo $data['teaOrigine'] ?></p>

</body>
