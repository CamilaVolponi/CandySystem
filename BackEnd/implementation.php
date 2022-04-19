<?php

class Pessoa {
    public $cpf, $nome, $telefone, $email, $senha;

    public function __construct($cpf, $nome, $telefone, $email, $senha) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }
}

class Funcionario extends Pessoa {
    public $cargo;

    public function __construct($cargo) {
        parent::__construct($cpf = "000.000.000", $nome = "Theo", $telefone = "9999999999", $email = "eu@gmail.com", $senha = "123456");
        $this->cargo = $cargo;
    }
}

class Proprietario extends Pessoa {
}

class Empresa {
    private $cnpj, $nome;

    public function __construct($cnpj, $nome) {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }
}

class Pedido {
    private $dataEntrega, $horario, $formaPagamento;

    public function __construct($dataEntrega, $horario, $formaPagamento) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
    }
}

class Cliente {
    private $nome, $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }
}

class Endereco {
    private $cep, $rua, $numero, $bairro, $cidade, $complemento, $referencia;

    public function __construct($cep, $rua, $numero, $bairro, $cidade, $complemento, $referencia) {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->complemento = $complemento;
        $this->referencia = $referencia;
    }
}

class Produto {
    private $nome, $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class ProdutoPedido {
    private $quantidade, $preco;

    public function __construct($quantidade, $preco) {
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }
}

class Receita {
    private $quantidade;

    public function __construct($quantidade) {
        $this->quantidade = $quantidade;
    }
}

class Ingrediente {
    private $descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote;

    public function __construct($descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote) {
        $this->descricao = $descricao;
        $this->marca = $marca;
        $this->unidadeDeMedida = $unidadeDeMedida;
        $this->quantidadeTotal = $quantidadeTotal;
        $this->quantidadeUsada = $quantidadeUsada;
        $this->precoUnitario = $precoUnitario;
        $this->validade = $validade;
        $this->lote = $lote;
    }
}

$p = new Pessoa($cpf = "000.000.000", $nome = "Lucas", $telefone = "9999999999", $email = "eu@gmail.com", $senha = "123456");
$f = new Funcionario("chefe");

?>
<h1>$p:</h1>
<h2 style="color: green;"><?= $p->nome ?></h2>
<hr>
<h1>$f:</h1>
<h2 style="color: green;"><?= $f->nome ?></h2>
<h2 style="color: green;"><?= $f->cargo ?></h2>
