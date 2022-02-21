<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <form action="/thanks.php" method="POST">
        <div>
            <label for="lastname">Nom: </label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="firstname">Prénom: </label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="email">Mail: </label>
            <input type="email" id="email" name="user_mail">
        </div>
        <div>
            <label for="mobile">Téléphone: </label>
            <input type="number" id="mobile" name="user_mobile">
        </div>
        <div>
            <label for="subject">Choisir un sujet: </label>
            <select name="user_subject" id="subject">
                <option value="demande de documents">Demande de documents
                </option>
                <option value="réclamations">Réclamations</option>
                <option value="changement de situation">Changement de situation</option>
            </select>
        </div>
        <div>
            <label for="message">Message: </label>
            <textarea name="user_message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>

</html>

<?php
