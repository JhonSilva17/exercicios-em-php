<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>12. Crie um programa que mostre na tela a seguinte contagem, usando a estrutura
“faça enquanto”: <br> 0 3 6 9 12 15 18 21 24 27 30 Acabou!</p>
    <p class="fw-bold mt-3">
        <?php

            $cont = 0;
            do {
                echo $cont . ' ';
                $cont+=3;
            } while ($cont <= 30);
            
            echo "Acabou!";
        ?>
    </p>



    <?php include './../footer.php'; ?>