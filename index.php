<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Sena</title>
    <link rel="stylesheet" href="././css/index.css">
    <link rel="stylesheet" href="././css/footerAndHeader.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    
    
    <div class="hero">
            <header class="header">
            <div class="contenedor-header">
                <img loading="lazy" alt="logo SENA" src="/img/logo_encabezado.png"/>
                <div class="titulo-header">
                    <p class="slna">SLNA</p>
                    <p class="descripcion_titulo">Seguimiento Local</p>
                    <p class="descripcion_titulo">de Notas de Aprendices</p>
                </div>
            </div>
            </header>

                <!--INICIO CONTENIDO-->

                <div class="contenido">
                    <div class="wrapper">
                        <form action="#">
                        <h2 class="title-login">Ingresar</h2>
                        
                        <select class="rol-field">
                            <option>Eliga su rol</option>
                            <option>Administrador</option>
                            <option>Coordinador</option>
                            <option>Instructor</option>
                        </select>

                            <div class="input-field">
                            <input type="text">
                            <label>Correo</label>
                        </div>
                        <div class="input-field">
                            <input type="password" >
                            <label>Contrasena</label>
                        </div>
                        <div class="forget">
                            <a href="#contrasena.html">Olvide mi contrasena</a>
                        </div>
                        <a class="buton-ingresar" href="pages/principal.php" >Ingresar</a>
                        <div class="register">
                            <p>Crear<a href="#"> Cuenta</a></p>
                        </div>
                        </form>
                    </div>
                    
                </div>



                <!--FIN CONTENIDO-->

                <div class="footern">
                    <footer class="footera">
                        <div class="footer-container">
                        <img loading="lazy" alt="" src="/img/redes_footer.png"/>
                        <div class="url_footer">
                            <a id="link1" href="www.sena.edu.co" clas target="_blank">www.sena.edu.co</a>
                            <a id="link2" href="www.zajuna.sena.edu.co" target="_blank">www.zajuna.sena.edu.co</a>
                            <a id="link3" href="www.senasofiaplus.edu.co" target="_blank">www.senasofiaplus.edu.co</a>
                        </div>
                        </div>
                    </footer>
            </div>
    </div>


  </body>
</html>

   