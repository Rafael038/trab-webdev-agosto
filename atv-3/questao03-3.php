<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 3</title>
    <link rel="stylesheet" href="questao03.css">
    <link rel="stylesheet" href="global.css">
    
</head>

<body>

<?php
        $r1 = isset($_GET["r1"]) ? $_GET["r1"] : 0;
        $r2 = isset($_GET["r2"]) ? $_GET["r2"] : 0;
 ?>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
    <div class="questoes">
            <h2>Trabalho: Questão 3</h2>

            <div class="perguntas">
                <h3>Q3: Lorem ipsum dolor sit amet consectetur adipiscing elit?</h3>
                    <form id="questao" action="questao03-1.php" method="get">
                        <div class="resposta">
                            <ol type="A">
                                <a href="./questao03-4.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=1">
                                    <li>Sed do eiusmod tempor.</li>
                                </a>
                                <a href="./questao03-4.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=2">
                                    <li>Incididunt ut labore.</li>
                                </a>
                                <a id="resp" href="./questao03-4.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=3">
                                    <li>Et dolore magna aliqua.</li>
                                </a>
                                <a href="./questao03-4.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=4">
                                    <li>Enim nunc faucibus.</li>
                                </a>
                                <a href="./questao03-4.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=5">
                                    <li>Pellentesque sit amet.</li>
                                </a>
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