<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada </title>
</head>

<body>

    <?php

    $tab = 0;
    if(isset($_POST["edTABUADA"])){
        $tab = $_POST["edTABUADA"];
        if(!is_numeric($tab)){
            echo "<br>O valor informado não é um número.<br>";
        }else{
   

        $num=0;
        while($num<=10){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }

    }
}

?>

<form method="post">
    <input type="text" name="edTABUADA" >
    <input type="submit">
</form>

</body>


</html>