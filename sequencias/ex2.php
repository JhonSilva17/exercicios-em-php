<?php 
    include './../head.php';
    include './../header.php';
?>

        <section class="bg-light p-3 text-dark fs-4">
            <p>2. Crie um programa que leia o preço de um produto, calcule e mostre o seu PREÇO PROMOCIONAL, com 5% de desconto</p>
            <form action="ex2.php" method="GET" class="border-top border-3 w-75">
                <label for="preco" class="mt-3">Informe o valor do produto</label>
                <div class="d-flex gap-2 mt-2">
                    <input type="number" id="preco" class="form-control w-75" name="preco" min="0" step="any" placeholder="Casas decimais com o ponto. Ex: 2.8">
                    <input type="submit" value="Enviar" class="btn btn-primary fs-5">
                </div>
            </form>
    
            <p class="fw-bold mt-3">
               <?php 

                    $preco_produto = isset($_GET['preco']) ? $_GET['preco'] : 0;
                    $desconto = ($preco_produto * 5) / 100;
                    $preco_final = number_format($preco_produto - $desconto, 2, ',', '.');
                    echo "<span class='fw-normal'>Preço do produto: <strong>R$ " . number_format($preco_produto, 2, ',', '.') . "</strong></span> <br>
                    <span class='fw-normal'> Preço com desconto de 5% aplicado: <strong>R$ $preco_final</strong> </span>";
                  
               ?>
            </p>
       

<?php include './../footer.php' ?>