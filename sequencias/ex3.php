<?php 
    include './../head.php';
    include './../header.php';
?>

        <section class="bg-light p-3 text-dark fs-4">
            <p>3. Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o seu novo salário, com 15% de aumento.</p>
            <form action="ex3.php" method="GET" class="border-top border-3 w-75">
                <label for="salario" class="mt-3">Informe o valor do seu salário</label>
                <div class="d-flex gap-2 mt-2">
                    <input type="number" id="salario" class="form-control w-75" name="salario" min="0" step="any" placeholder="Casas decimais com o ponto. Ex: 2.50" required>
                    <input type="submit" value="Enviar" class="btn btn-primary fs-5">
                </div>
            </form>
    
            <p class=" mt-3">
               <?php 

                    $salario = isset($_GET['salario']) ? $_GET['salario'] : 0;
                    if ($salario == '') {
                        echo "Por favor, informe um valor";
                    } else {
                        $aumento = ($salario * 15) / 100;
                        $salario_final = number_format($salario + $aumento, 2, ',', '.');
                        echo "<span class='fw-normal'>Preço do produto: <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong></span> <br>
                        <span class='fw-normal'> Preço com desconto de 5% aplicado: <strong>R$ $salario_final</strong> </span>";
                    }
                  
               ?>
            </p>
       

<?php include './../footer.php' ?>