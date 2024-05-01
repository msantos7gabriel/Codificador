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
        require_once "class/encriptador.php";
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="tel" name="texto" id="texto" value="<?= $_POST['texto'] ?? null ?>">
        <input type="submit" value="Encriptar">
    </form>
    <?php
        $e = new  encriptador($_POST['texto'] ?? null);
        $e->encriptar();

        echo $e->getCodificado();
    ?>

</body>

</html>