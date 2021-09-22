<?php
include './../head.php';
include './../header.php';
?>

<section class="bg-light p-3 text-dark fs-4">
    <p>5 Uma empresa precisa reajustar o salário dos seus funcionários, dando um
        aumento de acordo com alguns fatores. Faça um programa que leia o salário atual,
        o gênero do funcionário e há quantos anos esse funcionário trabalha na empresa.
        No final, mostre o seu novo salário, baseado na tabela a seguir:
        <ul>
            <li>Mulheres
                <ul>
                    <li>menos de 15 anos de empresa: +5%</li>
                    <li>de 15 até 20 anos de empresa: +12%</li>
                    <li>mais de 20 anos de empresa: +23%</li>
                </ul>
            </li>
            <li>Homens
                <ul>
                    <li>menos de 20 anos de empresa: +3%</li>
                    <li>de 20 até 30 anos de empresa: +13%</li>
                    <li>mais de 30 anos de empresa: +25%</li>
                </ul>
            </li>
        </ul></p>
    <form action="ex5.php" method="GET" class="border-top border-3 w-75">
        <label for="sal" class="fw-bold mt-3">Informe seu salário</label>
        <input type="number" id="sal" class="form-control" name="sal" step="any" required>

        <label for="anos" class="fw-bold mt-3">Há quantos anos você trabalha aqui?</label>
        <input type="number" id="anos" class="form-control" name="anos" required>

        <label for="any" class="fw-bold mt-3">Informe seu sexo</label>
        <div>
            <input type="radio" value="masc" id="masc" name="sexo" required>
            <label for="masc">Masculino</label>
            <input type="radio" value="fem" id="fem" name="sexo" required>
            <label for="fem">Feminino</label>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary w-100 fs-4 px-3 mt-4">Enviar</button>
        </div>
    </form>

    <p class=" mt-3">
        <?php

            $sal = isset($_GET['sal']) ? $_GET['sal'] : 0;
            $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : 0;
            $anos = isset($_GET['anos']) ? $_GET['anos'] : 0;
            $aumento = 0;
            
                if ($sexo === 'fem') { 
                    if ($anos <= 15) {
                        $aumento = ($sal * 3) / 100;

                    } else if ($anos > 15 && $anos <= 20) {
                        $aumento = ($sal * 12) / 100;

                    } else if ($anos > 15 && $anos <= 20) {
                        $aumento = ($sal * 12) / 100;

                    } else if ($anos > 20) {
                        $aumento = ($sal * 23) / 100;
                    } 

                } else {
                    if ($anos <= 20) {
                        $aumento = ($sal * 5) / 100;

                    } else if ($anos > 20 && $anos <= 30) {
                        $aumento = ($sal * 13) / 100;

                    } else if ($anos > 30) {
                        $aumento = ($sal * 25) / 100;
                    }
                }

            $novoSalario = number_format($sal + $aumento, 2, ',', '.');
            echo "Seu antigo salário: <span class='fw-bold'> R$ " . number_format($sal, 2, ',', '.') . " </span> <br>";
            echo "Seu novo salário: <span class='fw-bold'> R$ $novoSalario </span>";
        ?>
    </p>


    <?php include './../footer.php' ?>