<?php
$PAGE_NAME = 'Questão 1';
$types_ref = [
    'texto' => [
        'name' => 'Texto',
        'element' => [
            'raw' => '<input type="text" name="%1$s" id="%s">'
        ]
    ],
    'senha' => [
        'name' => 'Senha',
        'element' => [
            'raw' => '<input type="password" name="%1$s" id="%s">'
        ]
    ],
    'botao' => [
        'name' => 'Botão',
        'element' => [
            'raw' => '<input type="button" name="%1$s" id="%s" value="Botão %2$d">'
        ]
    ],
    'radio' => [
        'name' => 'Rádio',
        'element' => [
            'raw' => '<input type="radio" name="%1$s" id="%s"><label for="%1$s">Radio %2$s</label>'
        ]
    ],
    'caixa' => [
        'name' => 'Caixa de Seleção',
        'element' => [
            'prefix' => '<select name="caixa" id="caixa">' . "\n",
            'raw' => '<option value="%1$s">Caixa de Seleção %2$d</option>',
            'sufix' => '</select>'
        ]
    ],
    'faixa' => [
        'name' => 'Faixa',
        'element' => [
            'raw' => '<input type="range" name="%1$s" id="%s" min=0  max=100>'
        ]
    ],
];

function print_types($ref, $quantity, $input, $is_selected, $raw = false)
{
    $element = $ref[$input]['element'];
    $str = $element['prefix'] ?? '';
    for ($i = 1; $i <= $quantity; $i++)
        $str .= sprintf($element['raw'] . "<br>\n", $input . $i, $i);
    $str .= $element['sufix'] ?? '';
    if ($raw)
        echo htmlspecialchars($str);
    else
        echo $str;
}

$input_quantity = filter_input(
    INPUT_GET,
    'quantity',
    FILTER_VALIDATE_INT,
    ['options' => ['default' => 1, 'min_range' => 1, 'max_range' => 15]]
);


$input_type = filter_input(
    INPUT_GET,
    'input-type'
);

$is_selected = key_exists($input_type, $types_ref);

if ($is_selected)
    $types_ref[$input_type]['selected'] = 'checked';

include_once '../base/header.php';
?>

<style>
fieldset {
    border-radius: 10px;
}

.raw-output,
.output {
    margin: 0;
    padding: 1em .6em;
    background-color: color-mix(in srgb, var(---color) 10%, white);
    border: var(---color) solid 1px;
    border-radius: 10px;
}

.output {
    ---color: #0320af;
}

.raw-output {
    ---color: #4e08db;
}
</style>


<form method="GET" on>
    <fieldset>
        <legend>Critérios para Avaliação</legend>
        Quantidade de elementos:
        <div>
            <input type="number" name="quantity" min="1" max="15" value="<?= $input_quantity ?>"> (1 a 15)
        </div>
        Tipo:
        <div>
            <?php foreach ($types_ref as $type_name => $type): ?>
                <div>
                    <input type="radio" name="input-type" value="<?= $type_name ?>" id="<?= $type_name ?>"
                        <?= $type['selected'] ?? '' ?> onchange="this.form.submit();">
                    <label for="<?= $type_name ?>">
                        <?= $type['name'] ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
</form>

<br>
Saída:
<div class="output">
    <?php print_types($types_ref, $input_quantity, $input_type, $is_selected); ?>
</div>

<br>
Saída Bruta:
<pre class="raw-output">
<?php print_types($types_ref, $input_quantity, $input_type, $is_selected, true); ?>
</pre>




<?php include_once '../base/footer.php'; ?>