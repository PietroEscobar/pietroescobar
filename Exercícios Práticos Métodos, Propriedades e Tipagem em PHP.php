<?php

class Produto {

    public string $nome;
    public float $preco;
    public int $quantidade;

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }

        return false;
    }

    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}

?>