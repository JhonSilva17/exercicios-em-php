<?php include './../head.php'; ?>

<?php include './../header.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p>2. Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade dela e depois mostre se ela pode ou não votar.</p>
    <form action="ex2.php" method="GET" class="d-flex flex-column">
        <label for="idade" class="fs-4 fw-bold d-block">Em que ano você nasceu?:</label>
        <input type="number" id="idade" name="year" min='0' max="<?= date('Y') ?>" class=" w-50">
        <button type="submit" class="btn fs-4 bg-info text-white w-50 mt-3">Enviar</button>
    </form>

    <p class="fw-bold mt-3">
        <?php

        $ano_nascimento = isset($_GET['year']) ? $_GET['year'] : 0;
        $idade = date('Y') - $ano_nascimento;

        if ($ano_nascimento == '') {
            echo "";
        } else if ($idade < 16) {
            echo "Você ainda não pode votar";
        } else if (($idade >= 16 && $idade < 18) || ($idade >= 65)) {
            echo "Você pode votar, mas não é obrigatório.";
        } else {
            echo "Você é obrigado a votar.";
        }

        echo "<br> Idade igual a $idade";

        ?>
    </p>


    <?php include './../footer.php'; ?>