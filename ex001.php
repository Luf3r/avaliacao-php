<form action="ex001.php" method="POST">
    <h1>Operações Aritméticas com dois números!</h1>
    <label for="n1">Insira o primeiro número:</label>
    <input type="number" name="n1" required>
    <br>
    <label for="n2">Insira o segundo número:</label>
    <input type="number" name="n2" required>
    <br>
    <label for="op">Escolha a operação:</label>
    <select name="op">
        <option value="add">Soma</option>
        <option value="sub">Subtração</option>
        <option value="mult">Multiplicação</option>
        <option value="div">Divisão</option>
        <option value="mod">Módulo</option>
    </select>
    <br>
    <button type="submit">Calcular</button>
</form>

<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];
$res = 0;
$op_nome = "";

switch ($op) {
    case 'add':
        $res = $n1 + $n2;
        $op_nome = "Soma";
        break;
    case 'sub':
        $res = $n1 - $n2;
        $op_nome = "Subtração";
        break;
    case 'mult':
        $res = $n1 * $n2;
        $op_nome = "Multiplicação";
        break;
    case 'div':
        if ($n2 != 0) {
            $res = $n1 / $n2;
            $op_nome = "Divisão";
        } else {
            echo "Erro: Divisão por zero não permitida.";
            exit();
        }
        break;
    case 'mod':
        if ($n2 != 0) {
            $res = $n1 % $n2;
            $op_nome = "Módulo";
        } else {
            echo "Erro: Módulo por zero não permitida.";
            exit();
        }
        break;
    default:
        echo "Operação inválida.";
        exit();
}

echo "A operação de $op_nome entre $n1 e $n2 resulta em: $res<br><br>";
echo "Área Nerds:";
echo "<pre>";
var_dump($res);
echo "</pre>";

?>
