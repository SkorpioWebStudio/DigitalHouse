<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php var_dump($_POST) ?>
    Gracias por registrarte, <?= $_POST["name"]?>.<br>
    Nos has dicho que tienes <?= $_POST["edad"]?> y hemos registrador tu cuenta <?= $_POST["email"]?>.<br>
    <?php if(isset($_POST["pais"])): ?>
    <?= $_POST["pais"] ?> nos gusta mucho.
    <?php endif ?>
    Gracias!

</body>
</html>