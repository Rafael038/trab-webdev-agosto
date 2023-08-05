<?php
$PAGE_NAME = 'Questão 2';

$height = [
    // cm
    'min' => 146,
    'max' => 210
];
$weight = [
    // kg
    'min' => 46,
    'max' => 120
];

function calc_IMC($height, $weight)
{
    $height = $height / 100;
    return $weight / ($height * $height);
}
function get_IMC($height, $weight)
{
    $values = [
        [
            'upper-limit' => 16,
            'label' => 'Baixo Muito Grave',
            'class' => 'imc-low-3'
        ],
        [
            'upper-limit' => 17,
            'label' => 'Baixo Grave',
            'class' => 'imc-low-2'
        ],
        [
            'upper-limit' => 18.5,
            'label' => 'Baixo',
            'class' => 'imc-low-1'
        ],
        [
            'upper-limit' => 25,
            'label' => 'Ideal',
            'class' => 'imc-ideal'
        ],
        [
            'upper-limit' => 30,
            'label' => 'Sobrepeso',
            'class' => 'imc-overwheight'
        ],
        [
            'upper-limit' => 35,
            'label' => 'Obesidade grau I',
            'class' => 'imc-obesity-1'
        ],
        [
            'upper-limit' => 40,
            'label' => 'Obesidade grau II',
            'class' => 'imc-obesity-2'
        ],
        [
            'upper-limit' => INF,
            'label' => 'Obesidade grau III',
            'class' => 'imc-obesity-3'
        ]
    ];

    $IMC = calc_IMC($height, $weight);
    foreach ($values as $value) {
        if ($IMC > $value['upper-limit'])
            continue;
        $value['IMC'] = $IMC;
        return $value;
    }
}


include_once '../base/header.php'; ?>

<style>
    .imc-low-3 {
        background-color: #021764;
    }

    .imc-low-2 {
        background-color: #151e9e;
    }

    .imc-low-1 {
        background-color: #0a0eea;
    }

    .imc-ideal {
        background-color: #00ff08;
    }

    .imc-overwheight {
        background-color: #c8c502;
    }

    .imc-obesity-1 {
        background-color: #ff0000;
    }

    .imc-obesity-2 {
        background-color: #8f0404;
    }

    .imc-obesity-3 {
        background-color: #6f0808;
    }
</style>




<table>
    <thead>
        <tr>
            <td>
            </td>
            <?php for ($i = $weight['min']; $i <= $weight['max']; $i++)
                echo "<th>$i</th>";
            ?>
        </tr>
    </thead>



    <?php for ($h = $height['min']; $h <= $height['max']; $h++) { ?>
        <tr>
            <th>
                <?= $h; ?>
            </th>
            <?php for ($w = $weight['min']; $w <= $weight['max']; $w++) {
                $IMC = get_IMC($h, $w);
                $title = "$IMC[label]\n$w kg\n$h cm\n" . round($IMC['IMC'], 2); ?>
                <td class="<?= $IMC['class'] ?>" title="<?= $title ?>">
                </td>
            <?php } ?>
        <tr>
        <?php } ?>
</table>



<?php include_once '../base/footer.php'; ?>