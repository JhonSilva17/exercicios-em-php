<?php include './../head.php'; ?>


<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>5. Crie uma função que receba 2 notas de um aluno indicando se o aluno passou. Para passar, a soma das notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.</p>

    <p class="mt-3 fw-bold">
        <?php

        function verificaAluno($nota1, $nota2)
        {
            $media = $nota1 + $nota2;
            if ($media >= 19 && $nota1 > 7 && $nota2 > 7) {
                echo "O aluno está <span class='text-success'>aprovado</span>. Média = $media";
            } else {
                echo "O aluno está <span class='text-danger'>reprovado</span> Média = $media";
            }
        }
        verificaAluno(12, 12.5);
        ?>
    </p>


    <?php include './../footer.php'; ?>