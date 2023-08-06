<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho: Questão 4</title>
    <link rel="stylesheet" href="questao04.css">
    
</head>
<html>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>

    <main>
    <h2>Trabalho: Questão 4</h2>

<form action="" method="get" id="formulario-questoes">
    <fieldset>
        <legend>Parâmetros</legend>
        <label for="aporteIni">Aporte inicial (R$):</label>
        <input type="number" class="input-elementos" name="aporteIni" id="aporteIni" min="1" max="999999.99" step="0.01" value="500">
        <label> [até R$999.999,99]</label>
        <br>

        <label for="periodo">Período (meses):</label>
        <input type="number" class="input-elementos" name="periodo" id="periodo" min="1" max="480" value="12">
        <label> [de 1 a 480 meses]</label>
        <br>

        <label for="rendimentoMen">Rendimento mensal (%):</label>
        <input type="number" class="input-elementos" name="rendimentoMen" id="rendimentoMen" min="0.1" max="20" step="0.01" value="0.7">
        <label> [até 20%]</label>
        <br>


        <label for="aporteMen">Aporte mensal:</label>
        <input type="number" class="input-elementos" name="aporteMen" id="aporteMen" min="1" max="99999999.99" value="350">
        <label> [até R$999.999,99]</label>
        <br>

        <input type="submit" class="input-botao" value="Processar">
    </fieldset>

    <?php
    function calcularRendimento($aporteIni, $periodo, $rendimentoMen, $aporteMen)
    {
        $total = $aporteIni;
        $dados = array();
        for ($i = 1; $i <= $periodo; $i++) {
            $aporte = ($i == 1) ? 0 : $aporteMen;
            $rendimento = ($total + $aporte) * ($rendimentoMen / 100);
            $total += $aporte + $rendimento;
            $dados[] = array('mes' => $i, 'valor_inicial' => $aporteIni, 'aporte_mensal' => $aporte, 'rendimento' => $rendimento, 'total' => $total);
        }
        return $dados;
    }

    $dados = calcularRendimento($aporteIni, $periodo, $rendimentoMen, $aporteMen);
    ?>

    <table>
        <tr>
            <th>Mês</th>
            <th>Valor Inicial (R$)</th>
            <th>Aporte (R$)</th>
            <th>Rendimento (R$)</th>
            <th>Total (R$)</th>
        </tr>
        <?php foreach ($dados as $linha) : ?>
            <tr>
                <td><?php echo $linha['mes']; ?></td>
                <td><?php echo number_format($linha['valor_inicial'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($linha['aporte_mensal'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($linha['rendimento'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($linha['total'], 2, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </main>

    <p><a href="index.php">Retornar a Página Inicial</a></p>

    <footer>
    <p> Eduardo Veloso/Rafael Barros - &copy; 2023</p>   
    </footer>
</body>

</html>