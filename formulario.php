<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="templates/formulario.css">
</head>
<body>
    <!-- <form action="forma.php" method="get">
        <input type="text" name="usuario" id="usuario">
        <input type="submit" value="Enviar">
    </form> -->
    <header>
        <h1>Registro de Productos</h1>
    </header>
    <main>
        <!-- <form id="formulario" action="../fes_php/templates/productos.php" method="post"> -->
        <form id="formulario">
            <fieldset>
                <legend>Información de Productos</legend>
                 <!-- <div class="error"></div>  -->
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
                <label for="precio">Precio: </label>
                <input type="number" name="precio" id="precio" step="0.01">
                <label for="imagen">Subir Imagen: </label>
                <input type="file" name="imagen" id="imagen">
                <label for="descripcion">Descripción: </label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </main>
    <footer>
        Derechos Reservados &copy; - 2022
    </footer>
    <script src="../php_project/js/prueba.js"></script> 
</body>
</html>