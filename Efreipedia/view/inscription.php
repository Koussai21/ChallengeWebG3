<?php require_once 'main.php';?>
<?php require_once 'header.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Alpine.js CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- TailwindCSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
  <title>Formation alpine.js | Use API</title>
  <style>
    
    .form-container {
        text-align: center; 
    }

    .form-container form {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      margin: auto;
    }

    h2 {
      text-align: center;
      color: #333;
      margin: 0;
      font-size:32px; 
      font-weight: bold;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #007FFF;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #4caf50; 

    }
  </style>
</head>
    <body>

      <h2>Inscription</h2>
      <div class="form-container">
        <form action="" method="post">

          <label for="pseudo">Pseudo :</label>
          <input type="text" id="pseudo" name="pseudo" required>

          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required>

          <label for="telephone">Téléphone :</label>
          <input type="tel" id="telephone" name="telephone">

          <label for="motdepasse">Mot de passe :</label>
          <input type="password" id="motdepasse" name="motdepasse" required>

          <input type="submit" value="S'inscrire">
        </form>
      </div>

    </body>
</html>