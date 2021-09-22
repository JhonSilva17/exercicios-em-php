<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>1. Crie um programa que preencha automaticamente um vetor numérico com 7
    números gerados aleatoriamente pelo computador e depois mostre os valores
    gerados na tela</p>
    <p>
        <?php 
        
            $vetor = [];
            $contador = 0;

            while ($contador <= 7) {
                $random = rand(0, 100);
                array_push($vetor, $random);
                $contador++;
            }

            foreach ($vetor as $num) {
                echo "<span class='fw-bold'>$num </span>";
            }
        
        ?>
    </p>

    <?php include './../footer.php'; ?>