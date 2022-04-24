<?php
	class Ingrediente {
		private $descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote;

		public function __construct(string $descricao, string $marca, string $unidadeDeMedida, int $quantidadeTotal, float $precoUnitario, string $validade, string $lote) {
			$this->descricao = $descricao;
			$this->marca = $marca;
			$this->unidadeDeMedida = $unidadeDeMedida;
			$this->quantidadeTotal = $quantidadeTotal;
			$this->quantidadeUsada = 0;
			$this->precoUnitario = $precoUnitario;
			$this->validade = $validade;
			$this->lote = $lote;
		}

        public function printDescricao(): void {
            echo "Descricao: " . $this->descricao . "\n";
        }
        public function printMarca(): void {
            echo "Marca: " . $this->marca . "\n";
        }
        public function printUnidadeDeMedida(): void {
            echo "Unidade de medida: " . $this->unidadeDeMedida . "\n";
        }
        public function printQuantidadeTotal(): void {
            echo "Quantidade total: " . $this->quantidadeTotal . "\n";
        }
        public function printQuantidadeUsada(): void {
            echo "Quantidade usada: " . $this->quantidadeUsada . "\n";
        }
        public function printPrecoUnitario(): void {
            echo "Preco unitario: " . $this->precoUnitario . "\n";
        }
        public function printValidade(): void {
            echo "Validade: " . $this->validade . "\n";
        }
        public function printLote(): void {
            echo "Lote: " . $this->lote . "\n";
        }
        
        public function printAllInfos(): void {
            echo "<pre>";
            $this->printDescricao();
            $this->printMarca();
            $this->printUnidadeDeMedida();
            $this->printQuantidadeTotal();
            $this->printQuantidadeUsada();
            $this->printPrecoUnitario();
            $this->printValidade();
            $this->printLote();
            echo "</pre>";
        }
	}
?>
