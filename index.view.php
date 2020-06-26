<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css";
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">

            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>