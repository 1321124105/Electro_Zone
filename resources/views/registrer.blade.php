<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
        <title> Formulario de Registro </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="css/login.css">
        <style type="text/css">
        </style>
        <script type="text/javascript">
        </script>
    </head>
    
    <body>
    
        <div id="contenedor">
            <div id="contenedorcentrado">
                <div class="Logo">
                    <img src="images/translogo.png" class="imagen">
                </div>
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form id="loginform">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                        <label for="email">Correo</label>
                        <input id="email" type="text" name="email" placeholder="Email" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    <div class="pie-form">
                        <a href="inicio">¿Ya tienes Cuenta? Inicia sesion <br> Volver</a>
                        <hr>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>