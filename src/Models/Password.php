<?php

declare (strict_types=1);
namespace App\Models;

Class Password {
    private int $lenth;
    private bollean $numbers;
    private bollean $symbols;
    private bollean $includeLowerCase;
    private bollean $includeUpperCase;
    private string $password;
}

function __contruct (
    int $lenth,
    bollean $numbers,
    bollean $symbols,
    bollean $includeLowerCase,
    bollean $includeUpperCase
){
    $this->lenth = $lenth;
    $this->numbers = $numbers;
    $this->symbols = $symbols;
    $this->includeLowerCase = $includeLowerCase;
    $this->includeUpperCase = $includeUpperCase;
}

//Criar a função para criar a senha, de acordo com os requisitos instanciados no inde;
//Criar os getters e setters;

