<?php include('view/header.php') ;?>
  
    <main>
      <form class="parametre" action="valid_modif_parametres.php" method="post">
                <div class="card border-primary mb-3">
          <div class="en-tête">Paramètres du compte</div>
            <p class="texte">
              <label for="username">Username</label>
              <input class="form-input form-control" value="<?= $_SESSION['user']['login']; ?>" required>
            </p>
            <p class="texte">
              <label for="password">Password</label>
              <input class="form-input form-control" type="password" name="password" id="password" required>
              <label for="checkbox">
              <input type="checkbox" id="checkbox">
              Afficher le mot de passe
              </label>
            </p>
            <div class="Questionnaire">
              <label for="question">Question secrète</label>
              <select class="Choix multiple" id="question" name="question" required>
                <option value="">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?" selected>Votre question : Quel est le nom de mon premier animal domestique ?</option>
                <option value="Quel est le nom de mon premier animal domestique ?">Quel est le nom de mon premier animal domestique ?
                <option value="Quel est le nom du pays que j’aimerais le plus visiter ?">Quel est le nom du pays que j’aimerais le plus visiter ?
                <option value="Quel est le nom du personnage historique que j’admire le plus ?">Quel est le nom du personnage historique que j’admire le plus ?
                <option value="Quelle est la  marque du premier véhicule que j’ai conduit ?">Quelle est la  marque du premier véhicule que j’ai conduit ?
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                <option value ="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                <option value ="Quel était le métier de votre grand-père ?">Quel était le métier de votre grand-père ?</option>
              </select>
            </div>
            <p class="texte">
              <label for="reponse">Réponse</label>
              <input class="form-input form-control" type="text" id="reponse" name="reponse" value="" required>
            </p>
            <input type="hidden" name="account" value="32">
            <ul class="account center">
             <input id="submit" type="submit" class="btn btn-primary" value="Modifier">
              <a href="espace-membre.php" class="btn btn-link">Annuler</a>
            </ul>
          </div>
        </div>
      </form>
      <div class="push"></div>
    </main>
  </body>
</html>