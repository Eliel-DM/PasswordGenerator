<?php 

declare (strict_types=1);
namespace App\Models;

use Error;

Class Password 
{
    private int $length;
    private bool $numbers;
    private bool $symbols;
    private bool $includeLowerCase;
    private bool $includeUpperCase;
    private string $password;

    function __construct (
        int $length,
        bool $numbers,
        bool $symbols,
        bool $includeLowerCase,
        bool $includeUpperCase
    ){
        $this->length = $length;
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

        $caracteres = '';

        if($this->numbers){
            $caracteres .= '0123456789';
        }
        if ($this->symbols) {
            $caracteres .= '!@#$%^&*()-_=+[]{}<>?';
        }
        if ($this->includeLowerCase) {
            $caracteres .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if ($this->includeUpperCase) {
            $caracteres .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }


        //str_repeat Vai repetir os caracteres até que tenham o tamanho desejado.
        //str_shuffle Vai embaralhar a ordem dos caracteres 
        //substr Vai "Cortar" a senha no tamanho desejado, o 0 é para definir apartir de qual caractere irá iniciar a contagem.

        $this->password = substr(str_shuffle(str_repeat($caracteres, $this->length)), 0, $this->length);

        return $this->password;
    }



}

?>


