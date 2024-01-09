<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<?php require_once './controller/ArticleController.php';?>

<body>
<?php foreach ($articles as $article) { ?>    
        <div id="container1" class="row border border-color-white">
            <div id="product" class="col-lg-4">
                <h2 class="text-white"><?= $produits['nom'] ?></h2>
                <p class="text-white"><?= $produits['categorie'] ?></p>
                <p class="text-white"><?= $produits['description'] ?></p>    
                <a href="/"><button id="Commandez" type="button" class="btn btn-warning">voir plus</button></a>   
            </div> 
        </div></br>
<?php } ?>            
</body>