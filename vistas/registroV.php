<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilos/global.css"> <!-- Enlace a  rchivo CSS global-->
    <link rel="stylesheet" href="../estilos/registro.css"> <!-- Enlace a  archivo CSS -->
</head>
<body>
    <header>
        <!-- Contenido del encabezado -->
    </header>
    
    <main>
        <div class="contenedor">
                <!--mensajes para cambiar de formulario-->
                <div class="contenedor-mensaje">
                    <div class="mensaje-ir-login">
                        <h3>Ya tienes una cuenta?</h3>
                        <button id="btn-ir-login">ir al login</button>
                    </div>

                    <div class="mensaje-ir-registro">
                        <h3>No tienes cuenta?</h3>
                        <button id="btn-ir-registro">ir al registro</button>
                    </div>
                </div>
                <!--formularios de login y registro-->
                <div class="contenedor-form">
                    <form action="" class="log-form">
                        <h1>Login</h1>
                        <input type="email" placeholder="Correo Electronico" name="correo" required>
                        <p class="LoginEmailError error-message">err</p>
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        <p class="LoginPasswordError error-message">err</p>
                        <button id="logearse-boton">Log in</button>
                    </form>
                
                    <form action="" class="registro-form">
                        <h1>Registro</h1>
                        <input type="text" placeholder="Nombre" name="nombre_usuario" required>
                        <p class="NombreUserError error-message">err</p>
                        <input type="email" placeholder="Correo Electronico" name="correo" required>
                        <p class="EmailError error-message"></p>
                        <input id="input-registro-pwrd" type="password" placeholder="Contraseña" name="contrasena" required>
                        <p class="PasswordError error-message"></p>
                        <input type="password" placeholder="Confirmar Contraseña" required>
                        <p class="ConfirmPasswordError error-message"></p>
                        <button id="registrarse-boton">Registrarse</button>
                    </form>
                </div>
                

        </div>
    </main>
    <script src="../config/jquery-3.7.1.min.js"></script> <!-- Enlace a jQuery -->
    <script src="../controladores/registro/registroC.js"></script> <!-- Enlace a tu archivo JavaScript -->
    <script src="../controladores/registro/registroV.js"></script>
    <script src="../controladores/redireccion.js"></script>
</body>
</html>