<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 3</title>
    <link rel="stylesheet" href="questao03.css">
    <link rel="stylesheet" href="global.css">
    <script src="https://kit.fontawesome.com/e595c28941.js" crossorigin="anonymous"></script>

    
</head>

<body>

<?php
        $r1 = isset($_GET["r1"]) ? $_GET["r1"] : 0;
        $r2 = isset($_GET["r2"]) ? $_GET["r2"] : 0;
        $r3 = isset($_GET["r3"]) ? $_GET["r3"] : 0;
        $r4 = isset($_GET["r4"]) ? $_GET["r4"] : 0;
?>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
    <div class="questoes">
            <h2>Questão 3 - Gabarito</h2>

            <div class="perguntas">
                <h3>Gabarito:</h3>
                    <form id="questao" action="questao03-1.php"; method="get">
                        <div class = "resposta">
                        <ol type="1">
                        <li>
                            <?php echo "$r1"; 
                            if($r1 == 1)
                                {echo "<i class=\"fa-solid fa-check\"></i>";}
                            else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?>
                        </li>
                        <li>
                            <?php echo "$r2"; 
                            if($r2 == 2)
                                {echo "<i class=\"fa-solid fa-check\"></i>";}
                            else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?>
                        </li>
                        <li>
                            <?php echo "$r3"; 
                            if($r3 == 3)
                                {echo "<i class=\"fa-solid fa-check\"></i>";}
                            else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?>
                        </li>
                        <li>
                            <?php echo "$r4"; 
                            if($r4 == 4)
                                {echo "<i class=\"fa-solid fa-check\"></i>";}
                            else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?>
                        </li>
                        </ol>
                    </form>
                    
            </div>
        </div>


        </ol>

        <a href="questao03-1.php">Cancelar<a>
        <br>
        <a href="index.php">Retornar a Página Inicial</a>
        </div>
    </main>
    <footer>
    <p> Eduardo Veloso/Rafael Barros - &copy; 2023</p>
    </footer>
</body>

</html>