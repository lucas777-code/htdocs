<?php

// ENCAPSULAMENTO
class Pessoa {
    protected $nome;
    protected $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function falar() {
        throw new Exception("Método deve ser implementado nas subclasses");
    }
}

class Aluno extends Pessoa {
    private $matricula;
    
    public function __construct($nome, $idade, $matricula) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }
    
    public function falar() {
        return "Sou o aluno {$this->nome} e estou estudando!";
    }
    
    public function getMatricula() {
        return $this->matricula;
    }
}

class Professor extends Pessoa {
    private $disciplina;
    
    public function __construct($nome, $idade, $disciplina) {
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }
    
    public function falar() {
        return "Sou a professora {$this->nome} e ensino {$this->disciplina}.";
    }
    
    public function getDisciplina() {
        return $this->disciplina;
    }
}

class Diretor extends Pessoa {
    public function falar() {
        return "Sou o diretor {$this->nome} e coordeno a escola.";
    }
}

class Funcionario extends Pessoa {
    private $cargo;
    
    public function __construct($nome, $idade, $cargo) {
        parent::__construct($nome, $idade);
        $this->cargo = $cargo;
    }
    
    public function falar() {
        return "Sou a funcionária {$this->nome}, trabalho como {$this->cargo}.";
    }
    
    public function getCargo() {
        return $this->cargo;
    }
}

// Teste das classes com encapsulamento
$aluno1 = new Aluno("Carlos", 20, "A123");
$professor1 = new Professor("Mariana", 40, "Matemática");
$diretor1 = new Diretor("Roberto", 50);
$funcionario1 = new Funcionario("Ana", 35, "Secretária");

$pessoas = [$aluno1, $professor1, $diretor1, $funcionario1];

foreach ($pessoas as $pessoa) {
    echo $pessoa->falar() . "\n";
}

// Teste de encapsulamento
echo "Matrícula do aluno {$aluno1->getMatricula()}\n";
echo "Disciplina da professora: {$professor1->getDisciplina()}\n";
echo "Cargo da funcionária: {$funcionario1->getCargo()}\n";

?>