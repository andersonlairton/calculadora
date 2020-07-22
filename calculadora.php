<?php
if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['acao'];
} else {
    echo 'Não foi possivel realizar a operação,foram inseridos caracteres não numericos,por favor refaça a operação';
    die;
}
switch ($operacao) {
    case 'Soma':
        echo 'A soma de ' . $n1 . ' e ' . $n2 . ' é de ' . ($n1 + $n2);

        break;
    case 'Subtracao':
        echo 'A subtração de ' . $n1 . ' e ' . $n2 . ' é de ' . ($n1 - $n2);

        break;
    case 'Divisao':
        if ($n2 == 0) {
            echo 'Divisao invalida,não é possivel dividir o valor de ' . $n1 . ' por zero.Por favor,refaça a operação';
            die;
        } else {
            echo 'A divisão de ' . $n1 . ' e ' . $n2 . ' é de ' . ($n1 / $n2);
        }
        break;
    case 'Multiplicacao':
        echo 'A multiplicação de ' . $n1 . ' e ' . $n2 . ' é de ' . ($n1 * $n2);
        break;
    case 'Potencia':
        echo 'O numero ' . $n1 . ' elevado a ' . $n2 . ' é igual a ' . (pow($n1, $n2));
        break;
    default:
        # code...
        break;
}
