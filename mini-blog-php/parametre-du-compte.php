<?php include('view/header.php') ;?>
  

<?php
include('config/membres.php');

if(isset($_POST['password']) && !empty($_POST['password'])){
  $login = $_SESSION['user']['login'];
  $mdp = $_POST['password'];
  $question = $_POST['question'];
  $response = $_POST['response'];
  modification($login, $mdp, $question,$response);
}

?>

    <main>
      <div class="container">
        <div class="titreForm">
          Paramètre du compte
          </div><br>
      <form method="post">

            
              <label class="aligne">Pseudo</label>
              <input class="form-input form-control" type="text" value="<?= $_SESSION['user']['login']; ?>" required>
            <br>


           
              <label class="aligne">Mot de passe</label>
              <input class="mdp" type="password" name="password" id="password" required>
              <br>
            
           
            
              <label class="aligne">Question secrète</label>
              <select class="Choix multiple" id="question" name="question" required>
                <option value="0">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?"> Quel est le nom de mon premier animal domestique ?</option>
                <option value="3">Quel est le nom du pays que j’aimerais le plus visiter ?</option>
                <option value="4">Quel est le nom du personnage historique que j’admire le plus ?</option>
                <option value="5">Quelle est la  marque du premier véhicule que j’ai conduit ?</option>
                <option value ="6">Quelle est votre couleur préférée ?</option>
                <option value ="7">Quelle est votre équipe sportive favorite ?</option>
                <option value ="8">Quel était le métier de votre grand-père ?</option>
              </select></br>
            
              <label class="aligne">Réponse</label>
              <input class="réponse" type="text" id="réponse" name="response" value="" required>
            
            <input type="hidden" name="account" value="32">
            <ul class="account center">
             <input id="submit" type="submit" class="btn btn-primary" value="Modifier">
              <a href="espace-membre.php" class="btn btn-link">Annuler</a>
            </ul>
          
        
      </form>
      </div>
    </main>
  </body>
  <?php
    include('view/footer.php');
?>
</html>