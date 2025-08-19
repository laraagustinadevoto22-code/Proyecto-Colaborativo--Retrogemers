<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img width="400px" src="img/logo-dual.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="productos.php">Productos</a>
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                        <a class="nav-link" href="contacto.php">Contacto</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>


    <?php
    //require_once "validaciones/validar_contactos.php";

    function validarNombre($nombre)
    {
        return preg_match("/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+$/", $nombre);
    }

    function validarApellido($apellido)
    {
        return preg_match("/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+$/", $apellido);
    }

    function validarCorreo($correo)
    {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    function validarTelefono($telefono)
    {
        return preg_match("/^\+?[0-9\s\-]+$/", $telefono);
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"] ?? '');
        $apellido = trim($_POST["apellido"] ?? '');
        $correo = trim($_POST["correo"] ?? '');
        $telefono = trim($_POST["telefono"] ?? '');
        $msj = trim($_POST["msj"] ?? '');

        $errores = [];

        if (!validarNombre($nombre)) {
            $errores[] = "El nombre debe contener solo letras y espacios.";
        }

        if (!validarApellido($apellido)) {
            $errores[] = "El apellido debe contener solo letras y espacios.";
        }

        if (!validarCorreo($correo)) {
            $errores[] = "El correo no es válido.";
        }

        if (!validarTelefono($telefono)) {
            $errores[] = "El teléfono solo puede contener números, +, espacios o guiones.";
        }

        if (empty($errores)) {
            echo "<h3>Formulario enviado correctamente</h3>";
            // Aquí podrías guardar en BD, enviar mail, etc.
        } else {
            echo "<h3>Errores encontrados:</h3><ul>";
            foreach ($errores as $error) {
                echo "<li style='color:red'> $error</li>";
            }
            echo "</ul>";
        }
    }
    ?>


    <main>
        <div>
            <h2>Contáctenos</h2>
            <hr>
        </div>

        <form action="" method="POST">
            <!-- Nombre y Apellido -->
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Coloque aquí su nombre" maxlength="30" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" maxlength="30" required>
                </div>
            </div>

            <!-- Correo y Teléfono -->
            <div class="form-row">
                <div class="form-group">
                    <label for="correo">Email:</label>
                    <input type="email" name="correo" id="correo" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Tel. Celular:</label>
                    <input type="tel" name="telefono" id="telefono" placeholder="+54 11 1234 5678"
                        pattern="^\+?[0-9\s\-]{10,20}$"
                        title="Ingrese un número válido con código de país, por ejemplo: +54 11 1234 5678"
                        required>
                </div>
            </div>

            <!-- Comentarios -->
            <div class="form-row">
                <div class="form-group" style="width: 100%;">
                    <label for="msj">Comentarios:</label>
                    <textarea name="msj" id="msj" placeholder="Escriba aquí su mensaje o consulta..."></textarea>
                </div>
            </div>

            <div style="text-align: center;">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>


    <footer class="p-5 bg-dark">
        <p class="text-center text-white">todos los derechos reservados 2025- DUAL CORE</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>