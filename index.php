<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>QWERTY Encriptador</title>
</head>

<body>
    <?php
    require_once "src/php/class/encriptador.php";
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="tel" name="texto" id="texto" placeholder="Encritar" value="<?= $a_codificar ?? null ?>">
        <input type="submit" name="enviar" value="Encriptar">
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $a_codificar = $_POST['enviar'];
        $e = new  encriptador($a_codificar ?? null);
        $e->encriptar();
        echo $e->getCodificado();
    }

    ?>

</body>

</html>