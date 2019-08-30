<?php
require_once 'src/Utils.php';

session_start();
//on peut utiliser session destroy aussi mais la doc nous indqiuequ'il est préférable de réinitialiser le tableau quand on veut détruire la session
$_SESSION = [];

Utils::redirect('index.php');
