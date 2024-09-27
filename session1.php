<?php
$removeError = "";
session_start();
if (!isset($_SESSION["inventory"])) {
    $_SESSION["inventory"] = array("name" => null, "leche" => 0, "zumito" => 0);
}
if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case 'add':
            $_SESSION["inventory"]["name"] = $_POST["name"];
            if ($_POST["list"] == "zumito") {
                $_SESSION["inventory"]["zumito"] += (int)$_POST["cantidad"];
            } else {
                $_SESSION["inventory"]["leche"] += (int)$_POST["cantidad"];
            }
            break;
        case 'remove':
            if ($_POST["list"] == "zumito") {
                if ((int)$_POST["cantidad"] <= $_SESSION["inventory"]["zumito"]) {
                    $_SESSION["inventory"]["zumito"] -= (int)$_POST["cantidad"];
                    $removeError = false;
                } else {
                    $removeError = true;
                }
            } else {
                $_SESSION["inventory"]["leche"] -= (int)$_POST["cantidad"];
            }
            break;
        case 'reset':
            session_destroy();
            break;

        default:
            # code...
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session1</title>
</head>

<body>
    <h1>Administrador de supermercado</h1>
    <form action="session1.php" method="post">
        <label for="workerName">
            Nombre del trabajador:
            <input id="workerName" name="name" type="text" value="
            <?php
            if (isset($_SESSION["inventory"])) {
                echo $_SESSION["inventory"]["name"];
            } else {
                echo "";
            }
            ?>
                                                                    ">
        </label>
        <br>
        <hr>
        <h2>Escoge un producto</h2>
        <Select name="list">
            <option value="zumito">zumito</option>
            <option value="leche">leche</option>
        </Select>
        <br>
        <h2>Cantidad</h2>
        <input type="number" name="cantidad" id="cantidad">
        <?php
        if (isset($_SESSION["inventory"])) {
            if ($removeError) {
                echo "<b> ¡No se puede quitar mas cantidad de la que ya hay en la lista!</b>";
            }
        }
        ?>
        <br><br>
        <input type="submit" value="add" name="submit">
        <input type="submit" value="remove" name="submit">
        <input type="submit" value="reset" name="submit">
    </form>
    <h2>Inventario:</h2>
    <?php
    if ($_SESSION["inventory"]["name"] == null) {
        echo "No hay nada en el inventario...";
    } else {
        foreach ($_SESSION["inventory"] as $key => $value) {
            echo "$key: " . $value . "<br>";
        }
    }
    ?>
</body>

</html>