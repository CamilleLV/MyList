<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/commun.css">
    <title>Librairie | MyList</title>
</head>

<body>
    <style>
        #searchbox {
            background: #d8d8d8;
            border: 4px solid #e8e8e8;
            padding: 20px 10px;
            width: 30%;
            margin: auto;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        #searchbox input {
            outline: none;
        }

        #searchbox input[type="search"] {
            background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png) no-repeat 10px 6px #fff;
            border-width: 1px;
            border-style: solid;
            border-color: #fff;
            font: bold 12px Arial, Helvetica, Sans-serif;
            color: #bebebe;
            width: 65%;
            padding: 8px 15px 8px 30px;
        }

        #button-submit {
            background: #D89E5A;
            border-width: 0px;
            padding: 9px 0px;
            width: 23%;
            cursor: pointer;
            font: bold 12px Arial, Helvetica;
            color: #fff;
            text-shadow: 0 1px 0 #555;
        }

        #button-submit:hover {
            background: #7B562B;
        }

        #button-submit:active {
            background: #553f26;
            outline: none;
        }

        #button-submit::-moz-focus-inner {
            border: 0;
        }
    </style>

    <form id="searchbox" action="index.php" method="get">
        <input name="action" type="search" size="15" placeholder="Rechercher…">
        <input name="s" id="button-submit" type="submit" value="OK">
    </form>
    </div>
    <h3> Tous les Films : </h3>
    <div id="recommandations" class="">
        <section>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    echo '<li>
                            <div class="films_titres_et_oeuvres" style=" width: 175px; height: 260px; border: 1px solid black; background-color: #ffff">
                                <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                                    <div class="films_oeuvres"style="height: 80%;
                                    width: 100%;background-image: url(' . $recipe["url_img"] . '); background-position: center; background-size: 175px 200px;">
                                    </div>
                                    <h5 class="films_titres"style=" font-size: 10px">' . $recipe["title"] . '</h5>
                                </a>
                            </div>
                            </li>';
                }
                ?>
            </ul>
        </section>
        <script src="Assets/JS/index.js"></script>
</body>

</html>