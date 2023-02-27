<form class="formUpdateTeacher" method='post' action=<?php echo '?link=updateTeacher&idTeacher=' . $data['dataTeacher']['idTeacher']?>>

<!--NOM-->
  <div>
    <label>Nom:</label>
    <input type="text" name="name" value=<?php echo $data['dataTeacher']['teaName'] ?> required>
  </div>
<!--PRÉNOM-->
  <div>
    <label>Prénom:</label>
    <input type="text" name="firstname" value=<?php echo $data['dataTeacher']['teaFirstname'] ?> required>
  </div>
<!--GENRE-->
  <div>
    <label>Genre:</label>
    <select name="gender" required>
      <option value="male" <?php echo $data['dataTeacher']['teaGender'] == 'H' ? 'selected' : '' ?>>Homme</option>
      <option value="female" <?php echo $data['dataTeacher']['teaGender'] == 'F' ? 'selected' : '' ?>>Femme</option>
    </select>
  </div>
<!--PSEUDO-->
  <div>
    <label>Nickname:</label>
    <input type="text" name="nickname" value=<?php echo $data['dataTeacher']['teaNickname'] ?> required>
  </div>
<!--DESCRIPTION-->
  <div>
    <label>Description:</label>
    <textarea name="origin" rows="5" required><?php echo $data['dataTeacher']['teaOrigine'] ?></textarea>
  </div>

  <!--SECTION-->
  <div>

    <label>Section :</label>
    <select name="section" required>

      <?php

        // Boucle for qui va parcourir toutes les sections, générer une option pour chaque section et SI
        // La section de l'enseignant est la même que la section générée, la met par défaut
        foreach ($data['dataSection'] as $section)
        {

      ?>
      <option <?php echo $data['dataTeacher']['secName'] == $section['secName'] ? 'selected' : '' ?>><?php echo $section['secName'] ?></option>

      <?php /*FIN DU FOREACH*/ } ?>
    </select>
  </div>

  <button type="submit">Envoyer</button>

</form>

<p id = 'popup' class='popup'>Enseignant modifié avec succès !</p>

<?php 

  if(isset($data['animation']) && $data['animation'])
        {
            echo "<script src='resources/js/popUp.js'></script>"; 
        }

?>



