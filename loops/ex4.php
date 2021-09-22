<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>4. Desenvolva um algoritmo que mostre uma contagem regressiva de 30 até 1, marcando os números que forem divisíveis por 4, exatamente como mostrado abaixo:30 29 [28] 27 26 25 [24] 23 22 21 [20] 19 18 17 [16]....</p>
    <p class="fw-bold mt-3">
        <?php
        $i = 30;

        while ($i >= 1) {
            if ($i % 4 == 0) {
                echo " [$i] ";
            } else {
                echo $i . ' ';
            }
            $i--;
        }

        ?>
    </p>

<?php include './../footer.php'; ?>