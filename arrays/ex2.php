<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p> 2. Crie um algoritmo que leia a idade de 10 pessoas, mostrando no final:
        <ul class="list-unstyled">
            <li>a) Qual é a média de idade do grupo</li>
            <li>b) Quantas pessoas tem mais de 18 anos</li>
            <li>c) Quantas pessoas tem menos de 5 anos</li>
            <li>d) Qual foi a maior idade lida</li>
        </ul>
    </p>

    <p>
        <?php

            $idades_vetor = [];
            $cont = 1;
            $soma = 0;
            $media = 0;
            $mais_18 = 0;
            $menos_5 = 0;

            while ($cont <= 10) {
                $idades = rand(0, 120);
                array_push($idades_vetor, $idades);
                $soma += $idades;

                if ($idades >= 18) {
                    $mais_18++;
                } else if ($idades <= 5) {
                    $menos_5++;
                }

                $media = $soma / count($idades_vetor);
                $cont++;
            }

            $maior_idade = max($idades_vetor);

            echo "Média das idades: <span class='fw-bold'>$media</span> <br>";
            echo "Pessoas com mais de 18 anos: <span class='fw-bold'>$mais_18</span> <br>";
            echo "Pessoas com menos de 5 anos: <span class='fw-bold'>$menos_5</span> <br>";
            echo "Maior idade lida: <span class='fw-bold'>$maior_idade</span> <br>";

        ?>
    </p>

    <?php include './../footer.php'; ?>