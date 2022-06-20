<?php 

class Products{

  public $nome;
  public $categoria;
  public $prezzo;

  public function __construct($_nome, $_categoria, $_prezzo)
  {
    $this->nome = $_nome;
    $this->categoria = $_categoria;
    $this->prezzo = $_prezzo;
  }

}

?>