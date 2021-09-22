<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>6. Desenvolva um aplicativo que mostre na tela o resultado da expressão 500 + 450 + 400 + 350 + 300 + ... + 50 + 0</p>
    <p class="fw-bold mt-3">
        <?php
        $i = 500;
        $soma = 0;

        while ($i >= 0) {
            echo $i . ' + ';
            $soma += $i;
            $i -= 50;
        }

        echo $soma;


        ?>
    </p>

    <?php include './../footer.php'; ?>