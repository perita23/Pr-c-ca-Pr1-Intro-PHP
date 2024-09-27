<?php
session_start();
$_SESSION["inventory"] = array("name" => null, "leche" => null, "zumito"=>null);
if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case 'add':
            if ($_POST["list"] == "zumito")
            // $_SESSION["inventory"][""] 
            break;
        case 'remove':
            # code...
            break;
        case 'reset':
            session_reset();
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
    <form action="session1.php" method="post"></form>
    <label for="workerName">
        Nombre del trabajador:
        <input id="workerName" type="text">
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
    <br><br>
    <input type="button" value="add" name="submit">
    <input type="button" value="remove" name="submit">
    <input type="button" value="reset" name="submit">
    </form>
    <h2>Inventario:</h2>
    <?php

    ?>
</body>

</html>