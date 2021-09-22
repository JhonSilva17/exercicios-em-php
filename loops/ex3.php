<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>3. Escreva um programa que calcule o factorial de um número.</p>
    <p class="fw-bold mt-3">
        <?php

        $int = 5;
        $calc = 1;

        while ($int > 1) {
            $calc = $calc * $int;
            $int--;
        }

        echo $calc . ' ';


        ?>
    </p>


<?php include './../footer.php'; ?>