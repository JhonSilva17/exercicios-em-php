<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p class="fs-4">1. A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias</p>
    <p class="mt-3">
        <?php
            $nomeLivro = isset($_GET['n_livro']) ? $_GET['n_livro'] : 'Informe o nome do livro na URL';
            $tipoUsuario = isset($_GET['user']) ? $_GET['user'] : 'Informe o tipo de usuário na URL';
            $resposta = '';

            if ($nomeLivro == '' || $tipoUsuario  == '') {
                $resposta = 'Por favor, informe os valores.';

            } else if ($tipoUsuario === 'prof') {
                $resposta = "Livro emprestado: <span class='fw-bold'>$nomeLivro</span><br>
                            Tempo de devolução: <span class='fw-bold'>10 dias</span> <br>
                            <span class='text-success'>Tenha uma ótima leitura, professor(a).</span>";
            } else if ($tipoUsuario === 'stu') {
                $resposta = "Livro emprestado: <span class='fw-bold'>$nomeLivro</span><br>
                Tempo de devolução: <span class='fw-bold'>3 dias</span> <br>
                Uma ótima leitura, mas lembre-se: <span class='text-warning'>Entregue no prazo.</span>";
            }

            echo $resposta;

        ?>
    </p>

    <?php include './../footer.php'; ?>