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
    require_once "src/php/class/desencriptador.php";
    $a_codificar = isset($_POST['enviar1']) ? $_POST['texto1'] : null;
    $a_decodificar = isset($_POST['enviar2']) ? $_POST['texto'] : null;
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="texto1" id="texto1" placeholder="Encriptar">
        <input type="submit" name="enviar1" value="Encriptar">
    </form>

    <?php
    function encriptar($texto)
    {
        $e = new encriptador($texto ?? null);
        $e->encriptar();
        $texto = $e->getCodificado();
        return $texto;
    }

    function desencriptar($texto)
    {
        $e = new desencriptador($_POST['texto'] ?? null);
        $e->desencriptar();
        $texto = $e->getDesencriptado();
        return $texto;
    }

    if (isset($_POST['enviar1'])) {
        $a_decodificar = encriptar($a_codificar);
    }
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="texto" id="texto" placeholder="Desencriptar">
        <input type="submit" name="enviar2" value="Desencriptar">
    </form>
    <?php

    if (isset($_POST['enviar2'])) {
        $a_codificar = desencriptar($a_decodificar);
        $a_decodificar = encriptar($a_codificar);
    }

    ?>

    <script>
    // Variáveis JavaScript para armazenar os valores
    var aCodificar = "<?= $a_codificar ?>";
    var aDecodificar = "<?= $a_decodificar ?>";

    // Função para definir os valores dos inputs
    document.addEventListener("DOMContentLoaded", function() {
        if (aCodificar !== "") {
            document.getElementById('texto1').value = aCodificar;
        }
        if (aDecodificar !== "") {
            document.getElementById('texto').value = aDecodificar;
        }
    });
    </script>

</body>

</html>