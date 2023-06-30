<?php
$host = 'localhost';
$dbname = 'bduser';
$username = 'root';
$password = 'root';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $sujet = isset($_POST['sujet']) ? $_POST['sujet'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    if (!empty($prenom) && !empty($nom) && !empty($email) && !empty($sujet) && !empty($message)) {
        $requete = $bdd->prepare('INSERT INTO form (prenom, nom, email, sujet, message) VALUES (?, ?, ?, ?, ?)');
        $requete->execute([$prenom, $nom, $email, $sujet, $message]);

        header("Location: index.php");
        exit();
    } else {
        $erreur = "Veuillez remplir tous les champs obligatoires.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>index</title>
</head>

<body>
    <div class="container">
        <main id="hexgrid">
            <div class="grid"></div>
            <div class="light"></div>
            <header>
                <nav class="navbar">
                    <img id="navbar-logo" src="img/logo.svg" alt="logo de mon site">
                    <a href="admin.php" i="lock">
                        <i class="fa-solid fa-lock" style="color: white; font-size: 30px;"></i>
                    </a>
                </nav>
                <br>
                <p id="para">Je suis Grégoire Ogier, étudiant en première année à la NWS. Passionné par le développement
                    web et les jeux vidéo, je souhaite obtenir un diplôme de Chef de projets digitaux - Développeur Web.
                    J'ai de l'expérience dans la création de jeux vidéo, WordPress, des projets associatifs et le
                    développement web front-end et back-end. Je suis également intéressé par la cybersécurité, bien que
                    je n'aie pas encore d'expérience concrète dans ce domaine.</p>
            </header>
            <div class="left">
                <p class="titleleft">
                    Personnalité
                </p>
                <div class="textleft">
                    <a>
                        En tant que développeur, je suis passionné par l'art de créer des solutions numériques
                        innovantes et fonctionnelles. Je suis constamment avide de nouvelles connaissances et de
                        technologies émergentes, cherchant à rester à la pointe de mon domaine. Ma curiosité me pousse à
                        explorer divers langages de programmation tels que HTML, CSS, JavaScript, PHP, C# et Python,
                        ainsi que des frameworks populaires tels que Angular et Node.js.
                    </a>
                </div>
            </div>
            <div class="right">
                <p class="titleright">
                    Passions
                </p>
                <div class="textright">
                    <a>
                        Ma passion pour le code est ancrée dans ma volonté de créer, d'innover et de résoudre des
                        problèmes. C'est une discipline qui me pousse à repousser les limites, à rester à jour et à
                        contribuer de manière significative. Le code est bien plus qu'une simple compétence pour moi,
                        c'est une véritable passion qui guide mon parcours professionnel et personnel.
                    </a>
                </div>
            </div>
            <div class="left">
                <p class="titleleft">
                    Formations
                </p>
                <div class="textleft">
                    <a>
                        J ai obtenu mon brevet des collèges au collège Victor Hugo à Rugles en 2017. j ai ensuite
                        commencé une première S mais cela ne m a pas plu et j ai donc redoublé afin d obtenir mon bac
                        STI2D au lycée Augustin Fresnel, en 2021. En février 2022 je suis rentré à la mission locale
                        dans la GJ131 afin de me définir un parcours professionnel viable. Actuellement je suis en
                        formation "classe préparatoire aux métiers du numérique" a l ESCCI d Évreux. Et je suis
                        actuellement en année 1 à la NWS pour passer mon diplöme de Chef de projets digitaux -
                        Développeur Web.
                    </a>
                </div>
            </div>
            <div class="right">
                <p class="titleright">
                    Compétences
                </p>
                <div class="textright">
                    <a>
                        En développement web, je maîtrise HTML, CSS, JavaScript, Node.js, PHP, WordPress, MySQL,
                        Angular, et j'ai des bases en SEO. En développement logiciel, j'ai travaillé avec C#, Unity et
                        Python. J'ai également des compétences en design incluant Figma, maquettage de site web, suite
                        Adobe, UX et UI design. J'ai acquis une expérience rapide en gestion de projet et en marketing
                        lors de ma première année à la NWS.
                    </a>
                </div>
            </div>
            <div class="left">
                <p class="titleleft">
                    Expériences
                </p>
                <div class="textleft">
                    <a>
                        Ma première expérience lors de mon stage de 3ème dans le cabinet d'architecture de Madame Mylène
                        Gajic en 2017 a été enrichissante, mais je ne savais pas si c'était le métier qui me
                        passionnerait toute ma vie. Cependant, mon entrée en stage chez Altameos Multimédia a été
                        déterminante et m'a prouvé que le métier de développeur m'intéressait beaucoup plus et
                        correspondait à mes aspirations professionnelles. Travailler aux côtés de l'équipe d'Altameos
                        Multimédia sur un projet de marketplace sécurisé a été une expérience captivante. J'ai découvert
                        de nouveaux langages et outils tels qu'Angular, TypeScript, PHP et MySQL, et j'ai réalisé que le
                        développement web était un domaine qui me plaisait énormément. Cette expérience m'a conforté
                        dans ma décision de poursuivre une carrière en tant que développeur et je suis impatient de
                        continuer à évoluer dans ce domaine passionnant.
                    </a>
                </div>
            </div>
            <div class="right">
                <p class="titleright">
                    Avenir
                </p>
                <div class="textright">
                    <a>
                        Je souhaite devenir développeur pour contribuer à façonner un monde numérique en constante
                        évolution. Passionné par la technologie, je suis motivé par l'opportunité de créer des solutions
                        innovantes, repousser les limites et faire une réelle différence dans la vie des gens. Le
                        développement offre une voie d'apprentissage continu, de collaboration stimulante et
                        d'exploration de nouvelles technologies. En tant que développeur, je pourrai allier créativité,
                        résolution de problèmes et contribution à un monde numérique en expansion.
                    </a>
                </div>
            </div>
            <div id="formulaire">
                <div id="txtForm">
                    <p>
                        Si vous le souhaitez vous pouvez me contacter via ce formulaire
                    </p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                    <input type="text" id="email" name="email" placeholder="Votre mail" required>
                    <select id="sujet" name="sujet" placeholder="Votre prénom">
                        <option value="" disabled selected>Choisissez le sujet de votre requête</option>
                        <option value="devis">Devis</option>
                        <option value="recrutement">Recrutement</option>
                        <option value="direction-projet">Direction de Projet</option>
                    </select>
                    <textarea id="message" name="message" rows="4" placeholder="Votre message" required></textarea>

                    <button type="submit">envoyer</button>
                </form>
            </div>

            <div id="boss">
                <div id="alpha">
                    <div id="cotgau">
                        <div id="z">
                            <img id="img" src="img/document.jpg" alt="photo de moi">

                        </div>
                        <div class="gau">
                            Je suis Grégoire Ogier, étudiant en première année à la NWS. Passionné par le développement
                            web et les jeux vidéo, je souhaite obtenir un diplôme de Chef de projets digitaux -
                            Développeur Web. J'ai de l'expérience dans la création de jeux vidéo, WordPress, des projets
                            associatifs et le développement web front-end et back-end. Je suis également intéressé par
                            la cybersécurité, bien que je n'aie pas encore d'expérience concrète dans ce domaine. </div>
                        <div class="gau">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                    svg {
                                        fill: #000000
                                    }
                                </style>
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <br>
                            <p>06 87 05 43 94</p>
                        </div>
                        <div class="gau">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                <style>
                                    svg {
                                        fill: #000000
                                    }
                                </style>
                                <path
                                    d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z" />
                            </svg>
                            <br>
                            <p>3A rue du Trianon, Sotteville-lès-Rouen</p>
                        </div>
                        <div class="gau">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <style>
                                    svg {
                                        fill: #000000
                                    }
                                </style>
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            <br>
                            <p>gregoire.ogier@gmail.com</p>
                        </div>
                        <div class="gau">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512">
                                <style>
                                    svg {
                                        fill: #000000
                                    }
                                </style>
                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                            </svg>
                            <br>
                            <p>2bleG</p>
                        </div>
                        <div class="gau">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <style>
                                    svg {
                                        fill: #000000
                                    }
                                </style>
                                <path
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>
                            <br>
                            <p>grégoire ogier</p>
                        </div>
                    </div>
                    <div id="cotdro">
                        <div id="a">
                            <h2>
                                OGIER
                                <br>
                                Grégoire
                            </h2>
                            <p>
                                Etudiant developpeur web à la NWS
                            </p>
                        </div>
                        <div class="dro">
                            <h4>compétences</h4>
                            <br>
                            <p>
                                En développement web, je maîtrise HTML, CSS, JavaScript, Node.js, PHP, WordPress, MySQL,
                                Angular, et j'ai des bases en SEO. En développement logiciel, j'ai travaillé avec C#,
                                Unity et Python. J'ai également des compétences en design incluant Figma, maquettage de
                                site web, suite Adobe, UX et UI design. J'ai acquis une expérience rapide en gestion de
                                projet et en marketing lors de ma première année à la NWS. </p>
                        </div>
                        <div class="dro">
                            <h4>formations</h4>
                            <br>
                            <p>
                                <span>
                                    2022-2025 | NWS
                                </span>
                                <br>
                                Actuellement en cursus pour passer mon diplôme de Chef de projets digitaux - Développeur
                                Web.
                                <br /><br />
                                <span>
                                    2022 | ESCCI
                                </span>
                                <br>
                                Formation non qualifiante "Préparation aux métiers du numérique".
                                <br /><br />
                                <span>
                                    2017-2021 | Lycée
                                </span>
                                <br>
                                Bac STI2D option SIN obtenu au rattrapage en candidat libre.
                            </p>
                        </div>
                        <div class="dro">
                            <h4>expériences</h4>
                            <br>
                            <p>
                                <span>
                                    Création de site
                                </span>
                                <br>
                                Avec d autres étudiants nous avons dû refaire le site de maromme tennis dans le cadre d
                                un devoir à la NWS.
                                https://marommetennis.fr/
                                <br /><br />
                                <span>
                                    Stage de validation d année 1 à la NWS en 2023
                                </span>
                                J ai fait ce stage pour finaliser mon année, durant ce stage j ai fait une api pour un
                                marketplace, chez Altameos Multimédia.
                                <br /><br />
                                <span>
                                    Stage de validation de formation à l ESCCI en 2022
                                </span>
                                <br>
                                J ai fait ce stage à l ESCCI chez Altameos Multimédia, en 2022. J y est appris à
                                developper un site web ainsi qu à le sécurisé brièvement.
                                <br />
                                <span>
                                    Stage de 3ème en 2017
                                </span>
                                <br>
                                Lors de ce stage j ai découvert les bases du métier d architecte, Dans le cabinet d
                                architecture Les ateliers d avre et d Iton.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footert">
                    <p>Vous pouvez également me retrouver ici pour de futures collaborations :</p>
                </div>
                <div class="footerl">
                    <a href="https://www.linkedin.com/in/gr%C3%A9goire-ogier-367299239/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="truc" height="3em"
                            href="https://www.linkedin.com/in/gr%C3%A9goire-ogier-367299239/" viewBox="0 0 448 512">
                            <style>
                                .truc {
                                    fill: #fff
                                }
                            </style>
                            <path
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg>
                    </a>
                    <a href="https://github.com/2bleG" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="truc" height="3em"
                            href="https://github.com/2bleG" viewBox="0 0 496 512">
                            <style>
                                .truc {
                                    fill: #fff
                                }
                            </style>
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>
                    </a>
                </div>
            </footer>
        </main>
    </div>


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>

</html>