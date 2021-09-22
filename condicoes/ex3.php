<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>3. Numa promoção exclusiva para o Dia da Mulher, uma loja quer dar descontos para todos, mas especialmente para mulheres. Faça um programa que leia nome, sexo e o valor das compras do cliente e calcule o preço com desconto. Sabendo que:</p>
    <ul>
        <li>Homens ganham 5% de desconto</li>
        <li>Mulheres ganham 13% de desconto</li>
    </ul>

    <form action="./ex3.php" method="GET">
        <label for="nome" class="fs-4 d-block">Qual o seu nome?</label>

        <input type="text" id="idade" name="year" min='0' max="<?= date('Y') ?>" class="w-100" step="any" required>

        <label class="mt-3 d-block">Informe o seu sexo</label>

        <input type="radio" name="sexo" id="masculino" value="mas" step="any" required>
        <label for="masculino" class='fw-bold'>Masculino</label>

        <input type="radio" name="sexo" id="feminino" value="fem" step="any" required>
        <label for="feminino" class='fw-bold'>Femino</label>

        <label for="salario" class="d-block mt-3">Informe o seu salário atual</label>
        <input type="number" name="salario" id="salario" class="w-100" step="any" required>

        <button type="submit" class="btn fs-4 bg-info text-white w-50 mt-5">Enviar</button>
    </form>


    <p class="fw-bold mt-3">
        <?php

        $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
        $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : '';
        $salario = isset($_GET['salario']) ? $_GET['salario'] : '';
        $aumento = 0;


        if ($sexo == 'fem') {
            $porcentagem = ($salario * 13) / 100;
            $aumento = $salario + $porcentagem;
        } else {
            $porcentagem = ($salario * 5) / 100;
            $aumento = $salario + $porcentagem;
        }

        echo "Salário atual:  R$ " . number_format($aumento, 2, ',', '.');

        ?>
    </p>


    <?php include './../footer.php'; ?>