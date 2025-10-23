<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Password;

$testingPassword = new Password (
  12,
  false,
  false,
  false,
  false
);


//$varName->functionPasswordCreate(PRECISA RECEBER UM OBJETO DE PASSWORD, a função se vira para gerir a lógica);

printf("Objeto criado com sucesso! \n");