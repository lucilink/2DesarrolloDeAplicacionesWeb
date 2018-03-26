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
                    <div class="main-content-dwes2">	
                            <h3><a href="../../tema1/indexTema1.html">Tema 1</a></h3><br>
                            <h3><a href="#">Tema 2</a></h3><br>
                            <h3><a href="../indexTema3.html">Tema 3</a></h3><br>
                            <h3><a href="#">Tema 4</a></h3><br>
                            <h3><a href="#">Tema 5</a></h3><br>
                            <h3><a href="#">Tema 6</a></h3><br>
                            <h3><a href="#">Tema 7</a></h3>					
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9"style="padding-top: 1%;" >
                    <h2>Ejercicio 1</h2>
                     <?php
                    //Declaración e inicialización de las variables
                    $nombre = 'Pablo'; //Tipo String.
                    $edad = 20; //Variable numérica integer
                    $nota = 4.95; //Variable numérica float
                    $boolean = true; //Variable boolean
                    $nula = null;
                    ?>
                    <div class="color" style="background-color:#f9f9f9">
                        <div class="col-md-2">
                            <?php
                                echo "<h3>ECHO</h3>";
                                echo "<p>Cadena ",$nombre,"<br/> Entero ",$edad,"<br/> Float ",$nota,"<br/> Boolean ",$boolean,"</p>"; //Mostrar el contenido de las variables usando 'echo'.
                            ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            echo "<h3>PRINT</h3>";
                            print ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'print'.
                            ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            echo "<h3>PRINTF</h3>";
                            printf ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'printf'.
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?php
                            echo "<h3>PRINT_R</h3>";
                            print_r ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'print_r'.
                            ?>
                        </div>
                        <?php
                            echo "<h3>Tipo y valor</h3>";//Mostramos el tipo de variable que es con gettype, y el valor que contiene.
                            echo '<p>La variable $nombre es del tipo ',gettype($nombre),' y tiene el valor ',$nombre,'</p>';
                            echo '<p>La variable $edad es del tipo ',gettype($edad),' y tiene el valor ',$edad,'</p>';
                            echo '<p>La variable $nota es del tipo ',gettype($nota),' y tiene el valor ',$nota,'</p>';
                            echo '<p>La variable $boolean es del tipo ',gettype($boolean),' y tiene el valor ',$boolean,'</p>';
                            print(nl2br("cadena con \n salto de linea")); //Mostramos una cadena con salto de línea
                            echo "<h3>VAR_DUMP</h3>";//Mostramos el tipo de variable que es con gettype, y el valor que contiene.
                            var_dump($nombre,$edad,$nota,$boolean);
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