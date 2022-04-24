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
        echo "Cep: " . $this->cep . "\n";
    }
    public function printRua(): void {
        echo "Rua: " . $this->rua . "\n";
    }
    public function printNumero(): void {
        echo "Numero: " . $this->numero . "\n";
    }
    public function printBairro(): void {
        echo "Bairro: " . $this->bairro . "\n";
    }
    public function printCidade(): void {
        echo "Cidade: " . $this->cidade . "\n";
    }
    public function printComplemento(): void {
        echo "Complemento: " . $this->complemento . "\n";
    }
    public function printReferencia(): void {
        echo "Referencia: " . $this->referencia . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printCep();
        $this->printRua();
        $this->printNumero();
        $this->printBairro();
        $this->printCidade();
        $this->printComplemento();
        $this->printReferencia();
        echo "</pre>";
    }
}
?>
