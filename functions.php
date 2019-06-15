<?php


    // $produtos = [];
    //
    // $produtos[] = [
    //     "nome" => "Camiseta vingadores",
    //     "preco" => 50.99,
    //     "estoque" => 100,
    //     "min" => 20,
    //     "status" => true
    // ];
    //
    // $produtos[] = [
    //     "nome" => "Calça Jeans",
    //     "preco" => 80.99,
    //     "estoque" => 100,
    //     "min" => 20,
    //     "status" => true
    // ];
    //
    // $produtos[] = [
    //     "nome" => "Bermuda jeans",
    //     "preco" => 60.99,
    //     "estoque" => 100,
    //     "min" => 20,
    //     "status" => true
    // ];
    //
    // $produtos[] = [
    //     "nome" => "Blusa",
    //     "preco" => 50.99,
    //     "estoque" => 10,
    //     "min" => 20,
    //     "status" => true
    // ];
    //
    // $produtos[] = [
    //     "nome" => "Jaqueta de Couro",
    //     "preco" => 50.99,
    //     "estoque" => 100,
    //     "min" => 20,
    //     "status" => true
    // ];
    //
    // $produtos[] = [
    //     "nome" => "Jaqueta Jeans",
    //     "preco" => 50.99,
    //     "estoque" => 100,
    //     "min" => 20,
    //     "status" => false
    // ];

    function totalProduto($produtoPreco, $produtoEstoque){
            $total = 0;
            $total = $produtoPreco * $produtoEstoque;
            return $total;
    }


    function totalEstoque(){

        global $produtos;
        $soma = 0;

        foreach ($produtos as $key => $produtos) {

            $soma = $soma + totalProduto($produtos['preco'], $produtos['estoque']);
        }
        return $soma;
    }

    function exibirProdutos(){

      $arquivoProdutos = "produtos.json";

      if (file_exists($arquivoProdutos)) {
        $jsonProdutos = file_get_contents($arquivoProdutos);
        $arrayProdutos = json_decode($jsonProdutos, true);
        return $arrayProdutos["produtos"];
      }

    }
