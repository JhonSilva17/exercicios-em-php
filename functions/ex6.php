<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>6. Crie um programa que tenha uma função SuperSomador(), que vai receber dois
        números como parâmetro e depois vai retornar a soma de todos os valores no
        intervalo entre os valores recebidos. <br>
        Ex: <br>
        SuperSomador(1, 6) vai somar 1 + 2 + 3 + 4 + 5 + 6 e vai retornar 21 <br>
        SuperSomador(15, 19) vai somar 15 + 16 + 17 + 18 + 19 e vai retornar 85.</p>

    <p class="mt-3 fw-bold">
        <?php

            function SuperSomador($menor, $maior) {
                $resultado = 0;

                while ($menor <= $maior) {
                    echo $menor. '  ';
                    $resultado+=$menor;
                    $menor++;
                }

                echo ' = ' . number_format($resultado, 0, ',', '.');
            }

            SuperSomador(2, 29);

        ?>
    </p>


    <?php include './../footer.php'; ?>