<?php include './../head.php'; ?>

<?php include './../header.php'; ?>
        
<section class="bg-light p-3 text-dark fs-4">
            <p class="fs-4">1. Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0.</p>
            <p class="mt-3 fw-bold">
                <?php 
                
                    function soma($n1, $n2) {
                        $soma = $n1 + $n2;
                        return $soma < 0 ? 0 : $soma;
                    }

                    echo 'O resultado é: ' . soma(5, 2);

                ?>
            </p>
        </section>
        <div class="row justify-content-end">
            <a href="./../index.html" class="text-decoration-none fs-4 mt-4 btn btn-primary px-5 w-25">Voltar</a>
        </div>
    </div>


    </div> <!--CONTAINE-->

    <?php include './../footer.php'; ?>