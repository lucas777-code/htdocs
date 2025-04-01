<?php
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
    public function falar() {
        return "Sou o aluno {$this->nome}, e estou estudando a materia de Matematica da professora Mariana!";
    }
}

class Professor extends Pessoa {
    protected $disciplina;
    
    public function __construct($nome, $idade, $disciplina) {
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }
    
    public function falar() {
        return "Sou a professora {$this->nome}, e ensino para o carlos {$this->disciplina}.";
    }
}

class Diretor extends Pessoa {
    public function falar() {
        return "Sou o diretor {$this->nome}, e coordeno a escola onde carlos estuda e Mariana da aula.";
    }
}

class Funcionario extends Pessoa {
    protected $cargo;
    
    public function __construct($nome, $idade, $cargo) {
        parent::__construct($nome, $idade);
        $this->cargo = $cargo;
    }
    
    public function falar() {
        return "Sou a funcionária {$this->nome}, trabalho como {$this->cargo} ajudando o Roberto.";
    }
}

// Teste das classes
$aluno1 = new Aluno("Carlos", 20);
$professor1 = new Professor("Mariana", 40, "Matemática");
$diretor1 = new Diretor("Roberto", 50);
$funcionario1 = new Funcionario("Ana", 35, "Secretária");

$pessoas = [$aluno1, $professor1, $diretor1, $funcionario1];

foreach ($pessoas as $pessoa) {
    echo $pessoa->falar() . "\n";
}

?>
