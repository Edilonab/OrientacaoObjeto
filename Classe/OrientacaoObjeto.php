<?php
class Login {
    public $name; 
    public $email;
    public $senha; 

    public function Logar() {
        if($this->email == "teste@testa.com" and $this-> senha == "123456",):
            echo "logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    };

    
    }
}


    /*Orientação a objeto

    Crie uma classe contendo 3 propriedades com seus respectivos 
    gets e sets e um método que multiplique as 3 retornando o produto.
     Deixe um exemplo de utilização da sua classe no final do código.*/
?>