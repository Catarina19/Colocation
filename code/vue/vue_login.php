<?php
/**
 * Created by PhpStorm.
 * User: Catarina.DE-JESUS
 * Date: 15.02.2018
 * Time: 11:13
 */

ob_start();
$titre = 'Rent A Snow - Login';
?>

<h1>Login</h1>

<?php
$contenu=ob_get_clean();
require "gabarit.php";

