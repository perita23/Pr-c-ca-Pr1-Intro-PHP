<?php
session_start();
if (!isset($_SESSION["numbers"])) {
    $_SESSION["numbers"] = [1, 2, 3];
}
if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case 'modificar':
            $_SESSION["numbers"][$_POST["position"] - 1] = (int)$_POST["newVal"];
            break;
        case 'reiniciar':
            $_SESSION['numbers'] = [0, 0, 0];
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session2</title>
</head>

<body>
    <form action="session2.php" method="post">
        <h2>Modificar array guardado en variable session</h2>
        <label for="position">
            Posicion a modificar:
            <input type="number" name="position" id="position">
        </label>
        <br><br>
        <label for="newVal">
            Nuevo valor:
            <input type="number" name="newVal" id="newVal">
        </label>
        <br><br>
        <input type="submit" value="modificar" name="submit">
        <input type="submit" value="media" name="media">
        <input type="submit" value="reiniciar" name="submit">
    </form>
    <br><br>
    <?php
    echo json_encode($_SESSION['numbers']);
    if (isset($_POST["media"])) {
        $media = 0;
        foreach ($_SESSION["numbers"] as $key => $value) {
            $media += $value;
        }
        echo $media / 3;
    }
    ?>
</body>

</html>