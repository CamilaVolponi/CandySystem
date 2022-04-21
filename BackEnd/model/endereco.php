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
}
?>
