<?php require_once 'main.php';?>
<?php require_once 'header.php';?>




<body>

    <h2>Inscription</h2>

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

</body>