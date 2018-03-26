<!DOCTYPE html>

<html>
    <head>
        <title>LUCI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../../webroot/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../webroot/css/estilos.css">
    </head>
    
    <body >
		
    <header>

        <h1>DESARROLLO WEB EN ENTORNO SERVIDOR</h1>
        <nav class="navbar navbar-default" style="margin-bottom: 0%;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="../../../index.html"><img src="../../../webroot/imagenes/logo.PNG" class="img-responsive pull-left" alt="" width="100" height="100"></a>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="../../index.html" style="color:white;">DESARROLLO WEB EN ENTORNO SERVIDOR</a></li>
                        <li><a href="../../../DWEC/index.html" style="color:white;">DESARROLLO WEB EN ENTORNO CLIENTE</a></li>
                        <li><a href="../../../DIW/index.html" style="color:white;">DISEÑO DE INTERFACES WEB</a></li>
                        <li><a href="" style="color:white;">DESPLIEGUE DE APLICACIONES WEB</a></li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-2 coltemas mb-4" style="">
                    <div class="main-content-dwes3">	
                            <h3><a href="../../tema1/indexTema1.html">Tema 1</a></h3><br>
                            <h3><a href="#">Tema 2</a></h3><br>
                            <h3><a href="../indexTema3.html">Tema 3</a></h3><br>
                            <h3><a href="#">Tema 4</a></h3><br>
                            <h3><a href="#">Tema 5</a></h3><br>
                            <h3><a href="#">Tema 6</a></h3><br>
                            <h3><a href="#">Tema 7</a></h3>					
                    </div>
                </div>
                
                <div class="col-md-10"style="padding-top: 1%;" >
                    <h2>EJERCICIO 12</h2>
                    <div style="background-color:#f9f9f9">
                        <?php
            echo '<h1>Usando print_r()</h1>';//Mostramos todos los datos que contine cada una de las variables.
            echo '<h2>$GLOBALS</h2>';
            print_r($GLOBALS);
            echo '<h2>$_SERVER</h2>';
            print_r($_SERVER);
            echo '<h2>$_POST</h2>';
            print_r($_POST);
            echo '<h2>$_GET</h2>';
            print_r($_GET);
            echo '<h2>$_SESSION</h2>';
            if(isset($_SESSION)){//Como la sesión no está creada, es necesario comprobar si existe para mostrar el contenido o un mensaje de error
                print_r($_SESSION);
            }else{
                print_r("La sesión no esta definida.");
            }
            echo '<h2>$_COOKIE</h2>';
            print_r($_COOKIE);
            echo '<h2>$_FILES</h2>';
            print_r($_FILES);
            echo '<h2>$_REQUEST</h2>';
            print_r($_REQUEST);
            echo '<h2>$_ENV</h2>';
            print_r($_ENV);

            echo '<h1>Usando for each()</h1>';//Mostramos los contenidos de cada una de las variables recorriendo cada una de ellas con un bucle y mostrando los datos con un formato
            echo '<h2>$GLOBALS</h2>';
            foreach ($GLOBALS as $variable => $valor){//Debido a que esta variable contiene los datos de las demás, es necesario realizar dos recorridos dentro de la misma.
                echo "<b>$variable</b><br/>";
                print_r($valor); echo '<br>';
            }
            echo '<h2>$_SERVER</h2>';
            foreach ($_SERVER as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_POST</h2>';
            foreach ($_POST as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_GET</h2>';
            foreach ($_GET as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_SESSION</h2>';
            if(isset($_SESSION)){//Como la sesión no está creada, es necesario comprobar si existe para mostrar el contenido o un mensaje de error
                foreach ($_SESSION as $variable => $valor){
                    echo "<b>$variable</b> = $valor<br/>";
                }
            }else{
                echo "<b>La sesión no está definida</b>";
            }
            echo '<h2>$_COOKIE</h2>';
            foreach ($_COOKIE as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_FILES</h2>';
            foreach ($_FILES as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_REQUEST</h2>';
            foreach ($_REQUEST as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_ENV</h2>';
            foreach ($_ENV as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
        ?>
                    </div>
                </div>
            </div>
        </div>
			
        <footer>
            <div class="container">
				<div class="row">
                    <div class="col-lg-4">                        
                        <p><em>Lucía Rodríguez Álvarez</em></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a href="https://github.com/lucilink/DWES-PHP"><img alt="" src="../../webroot/imagenes/logogithub.png" width="30" ></a></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a href="http://daw-usgit.sauces.local/LRA_1718/DWES/tree/master"><img alt="" src="../../webroot/imagenes/logogitlab.png" width="30" ></a></p>
                    </div>
                </div>
			
            </div>
        </footer>
		
		<script src="../../webroot/js/jquery.js"></script>    
		<script src="../../webroot/js/bootstrap.min.js"></script>
        
    </body>
</html>