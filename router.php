<?php
/**
 * Le router est chargé d'écouter les requêtes
 * HTTP provenant du client web
 * puis d'y répondre avec le contenu approprié.
 */

/**   if($_SERVER['REQUEST_URI'] === "/") {
*    header("location: https://google.fr", true,301);
*/

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
    case '/':
        echo "Page d'accueil";
        break;
    case '/about':
        echo "Page de présentation";
        break;
    case '/skills':
        echo "Page de compétences";
        break;
    case '/projects':
        echo "Page de projets";
        break;
    case '/contact':
       include './templates/contact.php';
        break;
    
    default:
        echo "Page 404";
        break;
}


