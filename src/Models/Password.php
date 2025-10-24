<?php 

declare (strict_types=1);
namespace App\Models;

Class Password 
{
    private int $lenth;
    private bool $numbers;
    private bool $symbols;
    private bool $includeLowerCase;
    private bool $includeUpperCase;
    private string $password;

    function __contruct (
        int $lenth,
        bool $numbers,
        bool $symbols,
        bool $includeLowerCase,
        bool $includeUpperCase
    ){
        $this->lenth = $lenth;
        $this->numbers = $numbers;
        $this->symbols = $symbols;
        $this->includeLowerCase = $includeLowerCase;
        $this->includeUpperCase = $includeUpperCase;
}

}



//Criar a função para criar a senha, de acordo com os requisitos instanciados no inde;
//Criar os getters e setters;

?>


