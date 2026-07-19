class Pessoa {
    constructor(nome, cargo, idade) {
        this.nome = nome;
        this.cargo = cargo;
        this.idade = idade;
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome} e sou ${this.cargo}.`);
    }
}

class Aluno extends Pessoa {
    constructor(nome, idade) {
        super(nome, 'Aluno', idade);
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou um aluno dedicado!`);
    }
}

class Professor extends Pessoa {
    constructor(nome, idade) {
        super(nome, 'Professor', idade);
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou um professor dedicado!`);
    }
}

class Diretor extends Pessoa {
    constructor(nome, idade) {
        super(nome, 'Diretor', idade);
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou o diretor da escola!`);
    }
}

class Funcionario extends Pessoa {
    constructor(nome, idade) {
        super(nome, 'Funcionário', idade);
    }

    falar() {
        console.log(`Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou um funcionário da escola!`);
    }
}

// Testando a herança criando vários objetos
const aluno1 = new Aluno('Maria', 16);
const aluno2 = new Aluno('João', 17);
const professor1 = new Professor('Carlos', 40);
const professor2 = new Professor('Ana', 35);
const diretor1 = new Diretor('Sr. Silva', 50);
const funcionario1 = new Funcionario('Sra. Souza', 30);

aluno1.falar();
aluno2.falar();
professor1.falar();
professor2.falar();
diretor1.falar();
funcionario1.falar();

// Testando encapsulamento protegendo um dado privado
class Idade {
    #idade;

    constructor(idade) {
        this.#idade = idade;
    }

    getIdade() {
        return this.#idade;
    }

    setIdade(novaIdade) {
        if (novaIdade > 0) {
            this.#idade = novaIdade;
        } else {
            console.log('Idade deve ser um número positivo.');
        }
    }
}

const idadeAluno = new Idade(16);
console.log(`A idade do aluno é: ${idadeAluno.getIdade()}`);