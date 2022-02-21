<?php

$message = "Merci " . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['user_subject'] . "." . "</br>" . "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['user_mobile'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];


echo $message;


