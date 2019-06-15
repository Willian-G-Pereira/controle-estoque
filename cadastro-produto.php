<?php

require_once('functions.php');
include_once('header.php');

if (isset($_GET['pos'])) {
  $pos = $_GET['pos'];
  $produtos = exibirProdutos();
  if ($pos >= count($produtos)){

    echo "Produto inexistente";
    exit(1);
    }
    $produto = $produtos[$pos];
  }else {
    echo "Erro";
  }

?>

<body>

      <main class="container">

        <form  class="form-group" action="cadastro-produto.php" method="POST"  >

          <h1>Cadastro de Produto</h1>

          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $produto['nome'] ?>">
          </div>

          <div class="form-group">
            <label for="">Preço</label>
            <input type="number" class="form-control" placeholder="Preço"name="preco" value="<?php echo $produto['preco'] ?>">
          </div>

          <div class="form-group">
            <label for="">Quantidade em estoque</label>
            <input type="number"  class="form-control"name="quantidadeestoque" value="<?php echo $produto['estoque'] ?>">
          </div>

          <div class="form-group">
            <label for="">Quantidade minima</label>
            <input type="number"  class="form-control"name="quantidademinima" value="<?php echo $produto['min'] ?>">
          </div>

          <div class="form-group">
            <button type="button" class="btn btn-primary">Enviar</button>
          </div>

        </form>

      </main>

</body>
<?php
    include_once('footer.php');
?>
