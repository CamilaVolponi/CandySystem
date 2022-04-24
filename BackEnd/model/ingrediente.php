<?php
	class Ingrediente {
		private $descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote;

		public function __construct(string $descricao, string $marca, string $unidadeDeMedida, int $quantidadeTotal, int $quantidadeUsada, float $precoUnitario, string $validade, string $lote) {
			$this->descricao = $descricao;
			$this->marca = $marca;
			$this->unidadeDeMedida = $unidadeDeMedida;
			$this->quantidadeTotal = $quantidadeTotal;
			$this->quantidadeUsada = $quantidadeUsada;
			$this->precoUnitario = $precoUnitario;
			$this->validade = $validade;
			$this->lote = $lote;
		}

        public function printDescricao(): void {
            echo "Descricao: " . $this->descricao . "<br>";
        }
        public function printMarca(): void {
            echo "Marca: " . $this->marca . "<br>";
        }
        public function printUnidadeDeMedida(): void {
            echo "Unidade de medida: " . $this->unidadeDeMedida . "<br>";
        }
        public function printQuantidadeTotal(): void {
            echo "Quantidade total: " . $this->quantidadeTotal . "<br>";
        }
        public function printQuantidadeUsada(): void {
            echo "Quantidade usada: " . $this->quantidadeUsada . "<br>";
        }
        public function printPrecoUnitario(): void {
            echo "Preco unitario: " . $this->precoUnitario . "<br>";
        }
        public function printValidade(): void {
            echo "Validade: " . $this->validade . "<br>";
        }
        public function printLote(): void {
            echo "Lote: " . $this->lote . "<br>";
        }
        
        public function printAllInfos(): void {
            $this->printDescricao();
            $this->printMarca();
            $this->printUnidadeDeMedida();
            $this->printQuantidadeTotal();
            $this->printQuantidadeUsada();
            $this->printPrecoUnitario();
            $this->printValidade();
            $this->printLote();
        }
	}
?>
