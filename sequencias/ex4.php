<?php 
    include './../head.php';
    include './../header.php';
?>

        <section class="bg-light p-3 text-dark fs-4">
            <p>4 .Escreva um programa para calcular a redução do tempo de vida de um fumante. Pergunte a quantidade de cigarros fumados por dias e quantos anos ele já fumou. Considere que um fumante perde 10 min de vida a cada cigarro. Calcule quantos dias de vida um fumante perderá e exiba o total em dias</p>
            <form action="ex4.php" method="GET" class="border-top border-3 w-50">
                <label for="dia" class="mt-3">Quantos cigarros você fuma por dia?</label>
                <input type="number" id="dia" class="form-control w-100" name="dia" min="0" required>

                <label for="ano" class="mt-3">Há quantos anos você fuma?</label>
                <input type="number" id="ano" class="form-control w-100" name="ano" min="0" required>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary w-50 mt-3 fs-4">Enviar</button>
                </div>
            </form>
    
            <p class=" mt-3">
               <?php 

                    $per_day = isset($_GET['dia']) ? $_GET['dia'] : 0;
                    $how_year = isset($_GET['ano']) ? $_GET['ano'] : 0;

                    $min_per_day = $per_day * 10;
                    echo "Minutos perdidos por dia: $min_per_day min";
                  
               ?>
            </p>
       

<?php include './../footer.php' ?>