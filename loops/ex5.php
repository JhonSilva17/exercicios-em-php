<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>5. Crie um algoritmo que leia o valor inicial da contagem, o valor final e o incremento, mostrando em seguida todos os valores no intervalo:Ex: Digite o primeiro Valor: 3Digite o último Valor: 10Digite o incremento: 2Contagem: 3 5 7 9 Acabou!</p>
    <p class="fw-bold mt-3">
        <?php

        $valor_inicial = 2;
        $valor_final = 10;
        $i = 1;

        if ($valor_inicial < $valor_final) {
            while ($valor_inicial <= $valor_final) {
                echo $valor_inicial . ' ';
                $valor_inicial += $i;
            }
        } else {
            while ($valor_inicial >= $valor_final) {
                echo $valor_inicial . ' ';
                $valor_inicial -= $i;
            }
        }

        ?>
    </p>

    <?php include './../footer.php'; ?>