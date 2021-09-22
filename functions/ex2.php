<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p class="fs-4">2. Crie uma função que receba 3 valores reais como argumento e retorne o maior valor.</p>
    <p class="mt-3 fw-bold">
        <?php


        function maior($n1, $n2, $n3)
        {
            return max($n1, $n2, $n3);
        }

        echo " O maior valor é: " . maior(5, 10, 20);

        ?>
    </p>

    <?php include './../footer.php'; ?>