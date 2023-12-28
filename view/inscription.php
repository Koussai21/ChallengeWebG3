<?php require_once 'header.php';?>

<body>
<form action="" method="post">
        <div>
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="tel" class="form-control" id="email" name="" required>
        </div>
        <div>
          <label class="text-white" for="telephone">Téléphone</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label class="text-white" for="mdp">Mot de passe</label>
          <input type="mdp" class="form-control" id="mdp" name="mdp" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
</body>