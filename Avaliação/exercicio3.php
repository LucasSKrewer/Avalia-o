<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $escolha = 4;
    $valor = 100;

    if ($escolha == 1) {
        $valor -= $valor * 0.15;
        printf('Valor: %g<br/>', $valor);
    } else if ($escolha == 2) {
        $valor -= $valor * 0.10;
        printf('Valor: %g<br/>', $valor);
    } else if ($escolha == 3) {
        printf('Valor: %g<br/>', $valor);
    } else if ($escolha == 4) {
        $valor += $valor * 0.10;
        printf('Valor: %g<br/>', $valor);
    }

    ?>

</body>

</html>
