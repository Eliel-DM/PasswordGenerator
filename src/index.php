<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Password;

$testingPassword = new Password (
  20, //tamanho da senha 
  false, // números 
  true, // Símbolos 
  false, // Letras minúsculas 
  true //  Letras maiúsculas
);


echo $testingPassword->generatePassword() ."\n";
