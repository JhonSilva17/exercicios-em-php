<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>7. Crie um programa que leia 6 números inteiros e no final mostre quantos deles são pares e quantos são ímpares</p>
    <p class="fw-bold mt-3">
        <?php

        $nums = [1, 20, 90, 34, 82, 3];
        $par = 0;
        $impar = 0;

        foreach ($nums as $num) {
            $num % 2 === 0 ? $par++ : $impar++;
        }

        echo "Quantidades de números pares: $par <br>";
        echo "Quantidades de números impares: $impar";

        ?>
    </p>



    <?php include './../footer.php'; ?>