<?php
class Filme {

    public int $id;
    public string $titulo;
    public string $diretor;
    public int $classificacao;
    public int $quantidade;

    public function __construct(
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade
    )
    {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificao = $classificacao;
        $this->quantidade = $quantidade; 
    }
}
echo "<pre>";
$filme = new Filme("Um sonho de liberdade","Diretor", 14,3);
var_dump($filme);

class Cliente{

        public int $id;
        public string $nome;
        public string $endereco;
        public string $telefone;
        public string $cpf;
        public int $saldo_devedor;
        
    
        public function __construct(
            string $nome,
            string $endereco,
            string $telefone,
            string $cpf,
            int $saldo_devedor
        )
        {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
            $this->saldo_devedor = $saldo_devedor;
        }
}
    
echo "<pre>";
$cliente = new Cliente("Luis","rua itu", "519999696", "04351197021","25",);
var_dump($cliente);

class Locacao{
    public int $id;
    public string $data;
    public string $data_devolucao;
    public string $valor;
    public string $cliente_id;

    public function __construct(
        string $data,
        string $data_devolucao,
        string $valor,
        string $cliente_id
    )
    {
        $this->data = $data;
        $this->data_devolucao = $data_devolucao;
        $this->valor = $valor;
        $this->cliente_id = $cliente_id;
    }
}
echo "<pre>";
$locacao = new Locacao("20/08/2024","21/08/2024", "20,00", "001");
var_dump($locacao);

class filme_Locacao{
    public string $id_filme;
    public string $id_locacao;
    public string $quantidade;

    public function __construct(
        string $id_filme,
        string $id_locacao,
        string $quantidade
    )
    {
        $this->id_filme = $id_filme;
        $this->id_locacao = $id_locacao;
        $this->quantidade = $quantidade;
    }
}
echo "<pre>";
$filme_locacao = new filme_Locacao("1010","010", "5");
var_dump($filme_locacao);