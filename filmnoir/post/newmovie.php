<?php
require '../lib/site.inc.php';

$controller = new Noir\NewMovieController($site, $_POST, $_SESSION);
header("location: " . $controller->getRedirect());
//echo '<a href="' . $controller->getRedirect() . '">' . $controller->getRedirect() . '</a>';