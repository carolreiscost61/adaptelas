<?php
class Carrinho_compras{
    public $ValorPagar; //valor a ser pago na compra     
    public $nome;       //nome do cliente
    private $quant;     //quantidade do produto no estoque

    function _construct(string $nome, int $quant, float $ValorPagar){
        $this->quant = $quant;
        $this->nome = $nome;
        $this->ValorPagar = $ValorPagar;
    }

    function getNome($name){
        $this->nome = $name;
    }

    function Verif_Estoque(){
        if($this->quant <= 0){
            $estoque = 0 - $this->quant;
            echo "Faltam " . $estoque . " produtos no estoque.\n";
        }else{
            echo "Temos " . $this->quant . " produtos.\n";
        }
    }

    function Adiciona_Estoque(int $quantid){
        $this->quant = $quantid;
    }

    function CompraRealizada(float $valorProd, int $quantProd):void
    {
        $this->ValorPagar += $valorProd*$quantProd;
        $this->quant -= $quantProd;
        echo "O total da sua compra é " . $this->ValorPagar . ".\n";

    }

}

function main(){
    $nome = (string) readline("Digite o nome do cliente: ");
    $cliente = new Carrinho_compras();
    $cliente->getNome($nome);
    $cliente->Adiciona_Estoque(20);
    print_r($cliente);
    
    $cliente->Verif_Estoque();
    $cliente->CompraRealizada(17, 55);
    $cliente->Verif_Estoque();
    print_r($cliente);

    $cliente->Adiciona_Estoque(200);
    print_r($cliente);
}

main()

?>