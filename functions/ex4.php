<?php include './../head.php'; ?>


<?php include './../header.php'; ?>
<section class="bg-light p-3 text-dark fs-4">
    <p>4. Crie uma função que receba dois valores inteiros como argumentos e retorne um valor booleano indicando se os números são divisíveis.</p>
    <p class="mt-3 fw-bold">
        <?php
        function divisiveis($n1, $n2)
        {
            echo $n1 % $n2 === 0 || $n2 % $n1 === 0 ? 'Divisão exata' : "Divisão não exata";
            echo "<br> Números informados: $n1 e $n2";
        }
        divisiveis(960, 2)
        ?>
    </p>



    <?php include './../footer.php'; ?>