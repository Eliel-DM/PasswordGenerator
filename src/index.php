<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Password;

$testingPassword = new Password (
  12, //tamanho da senha 
  false, // números 
  false, // Símbolos 
  false, // Letras minúsculas 
  false //  Letras maiúsculas
);


printf($testingPassword->generatePassword()." \n");

