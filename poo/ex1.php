<?php include './../head.php'; ?>
<?php include './../header.php'; ?>
<?php require_once './ex1-classe.php'; ?>

<section class="bg-light p-3 text-dark fs-4">
    <p class="fs-4">1. Calcular o salário líquido do funcionário sabendo
        que este é constituído pelo salário bruto mais
        o valor das horas extras subtraindo 8%
        de INSS do total. Serão lidos nesse problema
        o salário bruto, o valor das horas extras e o
        número de horas extras.
        Apresentar ao final o salário líquido</p>
    <p class="mt-3">
        <?php

            $salario = new Salario;
            $salario -> setSalarioBruto(20200);
            $salario -> setHorasExtras(10);
            $salario -> setNumHorasExtras(20);
            
            echo "Salário Bruto: <span class='fw-bold'> R$ " . $salario -> getSalarioBruto() . " </span> <br>
                Quantidade de horas extras: <span class='fw-bold'>" . $salario -> getHorasExtras() . " </span> <br>
                Valor de cada hora extra: <span class='fw-bold'> R$ " . $salario -> getNumHorasExtras() . " </span> <br>
                Salário líquido final: <span class='fw-bold'> R$ " . $salario -> salarioFinal() . " </span> <br>
                <small>* Aplicado um desconto de 8% do INSS</small>";


        ?>
    </p>

    <?php include './../footer.php'; ?>