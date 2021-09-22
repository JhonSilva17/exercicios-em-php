<?php include './../head.php'; ?>
<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>1. Escreva um programa que pergunte a velocidade de um carro. Caso ultrapasse 80Km/h, exiba uma mensagem dizendo que o usuário foi multado. Nesse caso, exiba o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.</p>
    <form action="ex1.php" method="GET">
        <input type="number" name="vel" class="form-control w-25 d-inline" step="any" min='0'>
        <button class="btn fs-5 bg-info text-white">Enviar</button>
    </form>
    <p class="fw-bold mt-3">
        <?php

        $velocidade = isset($_GET['vel']) ? $_GET['vel'] : 0;
        if ($velocidade > 80) {
            $acima = $velocidade - 80;
            $multa = $acima * 5;
            echo "Você foi multado, valor da multa R$ " . number_format($multa, 2, ',', '.');
        } else if ($velocidade == '' || $velocidade == 0) {
            echo "";
        } else {
            echo "Velocidade permitida.";
        }

        ?>
    </p>
    <?php include './../footer.php'; ?>