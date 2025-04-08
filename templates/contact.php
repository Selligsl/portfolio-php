<?php

/**
 * Page contact
 * Traitement du formulaire de contact
 * et envoi de l'email avec mailtrap
 */

//  var_dump($_POST['firstname'] ?? '', $_POST['lastname'] ?? '');

 $firstname = htmlspecialchars($_POST['firstname'] ?? '');
 $lastname = htmlspecialchars($_POST['lastname'] ?? '');

 var_dump($firstname);
 ?>

<h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me contacter
</h1>

<div class="grid place-items-center">
    <?php include 'templates/components/form.php'; ?>
</div>

