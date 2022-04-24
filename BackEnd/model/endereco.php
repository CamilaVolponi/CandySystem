<?php
class Endereco {
	private $cep, $rua, $numero, $bairro, $cidade, $complemento, $referencia;

	public function __construct(string $cep, string $rua, int $numero, string $bairro, string $cidade, string $complemento, string $referencia) {
		$this->cep = $cep;
		$this->rua = $rua;
		$this->numero = $numero;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->complemento = $complemento;
		$this->referencia = $referencia;
	}
    
    public function printCep(): void {
        echo "Cep: " . $this->cep . "<br>";
    }
    public function printRua(): void {
        echo "Rua: " . $this->rua . "<br>";
    }
    public function printNumero(): void {
        echo "Numero: " . $this->numero . "<br>";
    }
    public function printBairro(): void {
        echo "Bairro: " . $this->bairro . "<br>";
    }
    public function printCidade(): void {
        echo "Cidade: " . $this->cidade . "<br>";
    }
    public function printComplemento(): void {
        echo "Complemento: " . $this->complemento . "<br>";
    }
    public function printReferencia(): void {
        echo "Referencia: " . $this->referencia . "<br>";
    }
    
    public function printAllInfos(): void {
        $this->printCep();
        $this->printRua();
        $this->printNumero();
        $this->printBairro();
        $this->printCidade();
        $this->printComplemento();
        $this->printReferencia();
    }
}
?>
