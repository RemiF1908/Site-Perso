<?php
include_once("display_picture.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rémi Ferrato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.css" />
    <link href="index.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>


<body class="layout meadow light-4" >

<header>
    <nav class="navbar shadow-1 primary">
        <button class="btn rounded-1 white hide-md-up btn-small mr-2" data-target="main-sidenav">
            Menu
        </button>
        <a href="#" target="_blank" class="navbar-brand font-s5">Rémi Ferrato</a>
        <div class="navbar-menu ml-auto font-s3">
            <a class="navbar-link active hide-sm-down" href="#">Qui suis-je ?</a>
            <a class="navbar-link hide-sm-down" href="#">Mes photos</a>
            <a class="navbar-link hide-sm-down" href="#">Mes projets</a>
            <a class="navbar-link hide-sm-down" href="#">Me contacter</a>
        </div>
    </nav>
</header>

<main>
    <div class="grix xs10">

    <div class="profil-picture  p-5   row-xs9 col-xs10 grix xs9">

        <div class=" card glassmorphism vself-bottom fx-center text-white  mb-5 col-xs3 pos-xs4 ">
            <div class="card-header text-center font-s12">Rémi Ferrato</div>
            <div class="card-content pt-0 row-xs2 text-center font-s8">
                18 ans, Grenoble, France.
            </div>
        </div>
    </div>


    <?php
        //display_picture("data/pictures/", "picturesCaptions.json");
    ?>
    </div>
</main>

<footer class="footer primary font-s3">
    7Low Prod © 2022
</footer>

<script src="https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js"></script>
</body>
</html>


