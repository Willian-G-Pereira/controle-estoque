<?php

require_once('functions.php');
include_once('header.php');

?>


<main class="container">
<h1>Controle de Estoque</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Qtd Mínima</th>
                <th>Status</th>
                <th>Total</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $produtos = exibirProdutos();

            if(count($produtos) > 0) {

            foreach ($produtos as $indice => $valor) {

                $class = $valor["estoque"] < $valor["min"] ? "vermelho" : "";

                echo "<tr class='$class'>";
                echo "<td>". $valor["nome"]."</td>";
                echo "<td> R$". $valor["preco"]."</td>";
                echo "<td>". $valor["estoque"]."</td>";
                echo "<td>". $valor["min"]."</td>";
                echo "<td>". ($valor["status"] == true ? "Ativo": "Inativo") ."</td>";
                echo "<td> R$". number_format(totalProduto($valor['preco'], $valor['estoque']),2,',',',') ."</td>";
                echo "<td><a href='cadastro-produto.php?pos=".$indice."'>Alterar</a></td>";
                echo "</tr>";
            }
          }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan = "3">
                    Total em Estoque
                </td>
                <td colspan = "4" class="text-right">
                    <?php echo "R$" . totalEstoque();  ?>
                </td>
            </tr>

        </tfoot>
    </table>
</main>

<?php
    include_once('footer.php');
?>
