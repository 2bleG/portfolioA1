<?php
    include('db.php');
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>index</title>
</head>

<body>
    <div class="container">
        <main class="hexgrid">
            <div class="grid"></div>
            <div class="light"></div>
            <?php
            $query_rs_presentation = $connexion->prepare("SELECT * FROM presentation WHERE ID ='13' ORDER BY ID ASC");
            $query_rs_presentation->execute();
            $row_rs_presentation = $query_rs_presentation->fetch();
            ?>
            <header>
                <h1>
                <?php
                    echo nl2br($row_rs_presentation['titre']);
                    ?>
                </h1>
                <br>
                <p id="para">
                <?php
                    echo nl2br($row_rs_presentation['texte']);
                    ?>
                </p>
            </header>
            <?php
            $query_rs_personnalite = $connexion->prepare("SELECT * FROM personnalite WHERE ID ='2' ORDER BY ID ASC");
            $query_rs_personnalite->execute();
            $row_rs_personnalite = $query_rs_personnalite->fetch();
            ?>
            <div class="left">
                <p class="titleleft">
                <?php
                    echo nl2br($row_rs_personnalite['titre']);
                    ?>
                </p>
                <div class="textleft">
                <?php
                    echo nl2br($row_rs_personnalite['texte']);
                    ?>
                </div>
            </div>
            <?php
            $query_rs_passions = $connexion->prepare("SELECT * FROM passions WHERE ID ='2' ORDER BY ID ASC");
            $query_rs_passions->execute();
            $row_rs_passions = $query_rs_passions->fetch();
            ?>
            <div class="right">
                <p class="titleright">
                <?php
                    echo nl2br($row_rs_passions['titre']);
                    ?>
                </p>
                <div class="textright">
                <?php
                    echo nl2br($row_rs_passions['texte']);
                    ?>
                </div>
            </div>
            <?php
            $query_rs_formations = $connexion->prepare("SELECT * FROM formations WHERE ID ='2' ORDER BY ID ASC");
            $query_rs_formations->execute();
            $row_rs_formations = $query_rs_formations->fetch();
            ?>
            <div class="left">
                <p class="titleleft">
                    <?php
                    echo $row_rs_formations['titre'];
                    ?>
                </p>
                <div class="textleft">
                    <?php
                    echo nl2br($row_rs_formations['texte']);
                    ?>
                </div>
            </div>
            <?php
            $query_rs_competences = $connexion->prepare("SELECT * FROM competences WHERE ID ='2' ORDER BY ID ASC");
            $query_rs_competences->execute();
            $row_rs_competences = $query_rs_competences->fetch();
            ?>
            <div class="right">
                <p class="titleright">
                <?php
                    echo nl2br($row_rs_competences['titre']);
                    ?>
                </p>
                <div class="textright">
                <?php
                    echo nl2br($row_rs_competences['texte']);
                    ?>
                </div>
            </div>
            <?php
            $query_rs_experiences = $connexion->prepare("SELECT * FROM experiences WHERE ID ='3' ORDER BY ID ASC");
            $query_rs_experiences->execute();
            $row_rs_experiences = $query_rs_experiences->fetch();
            ?>
            <div class="left">
                <p class="titleleft">
                <?php
                    echo nl2br($row_rs_experiences['titre']);
                    ?>
                </p>
                <div class="textleft">
                <?php
                    echo nl2br($row_rs_experiences['texte']);
                    ?>
                </div>
            </div>
            <?php
            $query_rs_avenir = $connexion->prepare("SELECT * FROM avenir WHERE ID ='4' ORDER BY ID ASC");
            $query_rs_avenir->execute();
            $row_rs_avenir = $query_rs_avenir->fetch();
            ?>
            <div class="right">
                <p class="titleright">
                <?php
                    echo nl2br($row_rs_avenir['titre']);
                    ?>
                </p>
                <div class="textright">
                <?php
                    echo nl2br($row_rs_avenir['texte']);
                    ?>
                </div>
            </div>
            <div class="formulaire">
                <div class="txtForm">
                    <p>
                        Si vous le souhaitez vous pouvez me contacté via ce formulaire
                    </p>
                </div>
                <form action="">
                    <label for="mail"></label>
                    <input type="text" id="mail" name="mail" placeholder="Votre adresse mail">
                    <label for="requete"></label>
                    <input type="text" id="requestForm" name="request" placeholder="L'objet de votre requête">
                    <label for="subject"></label>
                    <textarea id="sujetForm" name="subject" placeholder="Décrivez votre requête"></textarea>
                    <input type="submit" value="envoyer">
                </form>
            </div>
            <footer>
                <a href="https://www.linkedin.com/in/gr%C3%A9goire-ogier-367299239/">
                    <i class="fa fa-linkedin-square" id="linkedin"></i>
                </a>
                <ul id="list">
                    <li>
                        <a>mentions légales</a>
                        <a>rgpd</a>
                    </li>
                </ul>
            </footer>
        </main>
    </div>
    
    <script src="script.js"></script>

</body>

</html>