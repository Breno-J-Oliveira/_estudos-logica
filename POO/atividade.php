<?php

class Pessoa {
    protected $nome;
    protected $cargo;
    protected $idade;

    public function __construct($nome, $cargo, $idade) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->idade = $idade;
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome} e sou {$this->cargo}.<br>";
    }
}

class Aluno extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Aluno', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um aluno dedicado!<br>";
    }
}

class Professor extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Professor', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um professor dedicado!<br>";
    }
}

class Diretor extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Diretor', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou o diretor da escola!<br>";
    }
}

class Funcionario extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Funcionário', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um funcionário da escola!<br>";
    }
}

// Testando a herança
$aluno1 = new Aluno('Maria', 16);
$aluno2 = new Aluno('João', 17);
$professor1 = new Professor('Carlos', 40);
$professor2 = new Professor('Ana', 35);
$diretor1 = new Diretor('Sr. Silva', 50);
$funcionario1 = new Funcionario('Sra. Souza', 30);

$aluno1->falar();
$aluno2->falar();
$professor1->falar();
$professor2->falar();
$diretor1->falar();
$funcionario1->falar();

// Encapsulamento
class Idade {
    private $idade;

    public function __construct($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($novaIdade) {
        if ($novaIdade > 0) {
            $this->idade = $novaIdade;
        } else {
            echo "Idade deve ser um número positivo.<br>";
        }
    }
}

$idadeAluno = new Idade(16);
echo "A idade do aluno é: " . $idadeAluno->getIdade() . "<br>";

// conversa entre os objetos
$aluno1->falar();
$professor1->falar();
$diretor1->falar();
$funcionario1->falar();

?>