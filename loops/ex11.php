<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>11. Crie um programa que leia sexo e peso de 8 pessoas, usando a estrutura
        “para”. No final, mostre na tela:
        <ul>
            <li>a) Quantas mulheres foram cadastradas</li>
            <li>b) Quantos homens pesam mais de 100Kg</li>
            <li>c) A média de peso entre as mulheres</li>
            <li>d) O maior peso entre os homens</li>
        </ul>
    </p>
    <p class="fw-bold mt-3">
        <?php

            $sexo = ['masculino', 'feminino', 'feminino', 'feminino' ,'masculino', 'masculino', 'feminino', 'feminino'];
            $peso = [120.90, 87.4, 56.3, 45.3, 56.8, 100.90, 80, 45.5];
            $woman = 0;
            $man_gordo = 0;
            $media_peso_woman = 0;
            $soma_media = 0;

            for ($i = 0; $i < count($sexo); $i++) {
                if ($sexo[$i] === 'feminino') {
                    $woman++;
                } else if ($sexo[$i] === 'masculino' && $peso[$i] >= 100) {
                    $man_gordo++;
                } else if ($sexo[$i] === 'feminino') {
                    $soma_media = $soma_media + $peso[$i];
                }
            }

            echo "Quantidade de mulheres: $woman <br>";
            echo "Quantidade de homens gordos: $man_gordo <br>";
            echo "Quantidade de homens gordos: $man_gordo <br>";
            echo "Média de peso das mulheres: $soma_media <br>";

        ?>
    </p>

    <?php include './../footer.php'; ?>