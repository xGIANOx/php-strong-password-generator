<?php 

if (isset($_GET['numberInput'])) {
    $numberInput = (int)$_GET['numberInput'];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';

    $password = '';

    for ($i = 0; $i < $numberInput; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
}


?>