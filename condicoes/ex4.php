<?php
include './../head.php';
include './../header.php';
?>

<section class="bg-light p-3 text-dark fs-4">
    <p>4. Faça um algoritmo que pergunte a distância que um passageiro deseja
        percorrer em Km. Calcule o preço da passagem, cobrando R$0.50 por Km para
        viagens até 200Km e R$0.45 para viagens mais longas.</p>
    <form action="ex4.php" method="GET">
        <label for="km" class="d-block mb-2 text-secondary">Qual a distância que você quer percorrer?</label>
        <div class="d-flex gap-3">
            <input type="number" id="km" name="km" min='0' required>
            <button class="btn btn-primary fs-5"> Enviar</button>
        </div>
    </form>


    <p class="fw-bold mt-3">
        <?php
        $KM = isset($_GET['km']) ? $_GET['km'] : null;
        $preco = 0;

        if ($KM <= 200) {
            $preco = $KM * 0.50;
        } else {
            $preco = $KM * 0.45;
        }

        echo 'Distância a ser percorrida: ' . $KM . 'km<br>Preço da passagem: R$ ' . number_format($preco, 2, ',', '.');
        ?>
    </p>



    <?php include './../footer.php'; ?>