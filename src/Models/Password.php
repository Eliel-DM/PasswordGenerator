<?php 

declare (strict_types=1);
namespace App\Models;

use Error;

Class Password 
{
    private int $lenth;
    private bool $numbers;
    private bool $symbols;
    private bool $includeLowerCase;
    private bool $includeUpperCase;
    private string $password;

    function __construct (
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


    public function minimumPasswordRequeriments () : bool
    {
         if(!$this->includeLowerCase && !$this->includeUpperCase){
            return false;
        }
        return true;
    }

    
    public function generatePassword() : string
    {
        if(!$this->minimumPasswordRequeriments()){
            return 'A senha precisa ter no mínimo caracteres minúsculos ou maiúsculos';
        }



        return "123";
    }



}



//Criar a função para criar a senha, de acordo com os requisitos instanciados no inde;
//Criar os getters e setters;

?>


