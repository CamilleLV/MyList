<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/toutespages.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/contact.css">
    <title>Contact | MyList</title>
</head>

<body>
    <!--<h1>Contact</h1>
    <form method="post">
        <label>Votre email</label>
        <input type="email" name="email" required><br><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input class="button-24" type="submit">
    </form>-->
    <form>
        <input class="button" type="button" value="Nous envoyer un E-mail" onclick="window.location.href='mailto:mylistcontactpro@gmail.com@gmail.com?subject=Envoi%20depuis%20la%20page%20contact.&body=Bonjour,%20Bonsoir,'"/>
    </form>
    <?php 
    /*
    if (isset($_POST['message'])) {
        $retour = mail('mylistcontactpro@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], '');
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }*/
    ?>
</body>
</html>