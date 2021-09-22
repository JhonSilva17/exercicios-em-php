<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>1. Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha, primeiro em ordem crescente e depois em ordem decrescente.</p>
    <p class="fw-bold mt-3">
        Ordem Crescente:
        <?php

        for ($count = 1; $count <= 10; $count++) {
            echo $count . ' ';
        }

        ?>

        <br>

        Ordem decrescente:
        <?php

        for ($count = 10; $count >= 1; $count--) {
            echo $count . ' ';
        }

        ?>
    </p>

<?php include './../footer.php'; ?>