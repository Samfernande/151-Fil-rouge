<form class="formUpdateTeacher" method='post' action=<?php echo '?link=addTeacher'?>>

<!--NOM-->
  <div>
    <label>Nom:</label>
    <input type="text" name="name" required>
  </div>
<!--PRÉNOM-->
  <div>
    <label>Prénom:</label>
    <input type="text" name="firstname" required>
  </div>
<!--GENRE-->
  <div>
    <label>Genre:</label>
    <select name="gender" required>
      <option value="male">Homme</option>
      <option value="female">Femme</option>
    </select>
  </div>
<!--PSEUDO-->
  <div>
    <label>Nickname:</label>
    <input type="text" name="nickname" required>
  </div>
<!--DESCRIPTION-->
  <div>
    <label>Description:</label>
    <textarea name="origin" rows="5" required></textarea>
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
      <option><?php echo $section['secName'] ?></option>

      <?php /*FIN DU FOREACH*/ } ?>
    </select>
  </div>

  <button type="submit">Envoyer</button>

</form>

<p id = 'popup' class='popup'>Enseignant ajouté avec succès !</p>

<?php echo $data['animation'] ? "<script src='resources/js/popUp.js'></script>" : '' ?>



