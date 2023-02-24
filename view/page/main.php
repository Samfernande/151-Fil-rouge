

<body>

	<h2>Tous les enseignants</h2>
	<table>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Surnom</th>
				<th class='containerAlignRight'>Options</th>
			</tr>
		</thead>
		<tbody>
            <?php
            // Récupère la table t_teacher et appel les bonnes caractéristiques
            foreach ($data as $teacher)
            {
            ?>


			<tr>
                <!--Génère le bon lien de connexion grâce à l'id de l'enseignant et affiche son nom et prénom-->
				<td>
                    <?php echo $teacher['teaFirstname'] . ' ' . $teacher['teaName']?>
                </td>

                <!--Affiche le surnom de l'enseignant-->
				<td>
                    <?php echo $teacher['teaNickname']?>
                </td>

				<td class='containerAlignRight'>
                    <a class='marginSide1 alignRight' href=<?php echo "?link=updateTeacher&idTeacher=" . $teacher['idTeacher'] ?>>Modifier</a> 
                    <a class='marginSide1 alignRight'>Supprimer</a> 
                    <a class='marginSide1 alignRight' href=<?php echo "?link=detail&idTeacher=" . $teacher['idTeacher'] ?>>Détails</a>
                </td>
			</tr>

            <?php
            }
            ?>
		</tbody>
	</table>
</body>
</html>
