<?php
    class Login {
        private $name; 
        private $email;
        private $senha; 

        public function getEmail() {
            return $this->email;
        }

        public function setEmail() {
            $email = filter_var($e, FILTER_SANITIZE_EMAIL)
            $this->email = $email;
        }

        public function getsenha() {
            return $this->senha;
        }

        public function setsenha($s) {
            $this->senha;
        }


        public function Logar() {
            if($this->email == "teste@testa.com" and $this-> senha == "123456",):
                echo "logado com sucesso!";
            else:
                echo "Dados inválidos";
            endif;
        }
    }

    $logar = new Login();
    $logar->setEmail("teste()/@teste.com");
    $logar->setSenha("123456");
    $logar->Logar();
    echo "<br>";
    echo $logar->getEmail();

    /*Orientação a objeto

    Crie uma classe contendo 3 propriedades com seus respectivos 
    gets e sets e um método que multiplique as 3 retornando o produto.
     Deixe um exemplo de utilização da sua classe no final do código.*/
?>