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
                    <div class="main-content-dwesform">	
                            <h3><a href="../../tema1/indexTema1.html">Tema 1</a></h3><br>
                            <h3><a href="#">Tema 2</a></h3><br>
                            <h3><a href="../indexTema3.html">Tema 3</a></h3><br>
                            <h3><a href="#">Tema 4</a></h3><br>
                            <h3><a href="#">Tema 5</a></h3><br>
                            <h3><a href="#">Tema 6</a></h3><br>
                            <h3><a href="#">Tema 7</a></h3>					
                    </div>
                </div>
<?php
    require_once '../ejercicio19/ejercicio19.php'; //incluimos la libreria de validacion
    $entradaOk=true; //variable que utilizamos para tratar los errores
    $mensajeError; //variable que almacena los mensajes de error para los campos
    if (isset($_POST['enviar'])){ //si se ha pulsado enviar hacemos el tratamiento de los datos
        $mensajeError["errorNombre"]= validacionFormularios::comprobarAlfabetico($_POST['nombre'], 25, 0, 1);// comprobamos el campo nombre
        $mensajeError["errorEdad"]= validacionFormularios::comprobarEntero($_POST['edad'], 1); //comprobamos el campo edad
        $mensajeError["errorFechaNacimiento"]= validacionFormularios::validarFecha($_POST['nacimiento'], 1); //comprobamos el campo fecha
        $mensajeError["errorCorreo"]= validacionFormularios::validarEmail($_POST['correo'], 50, 10, 1); //comprobamos el campo fecha
        $mensajeError["errorMensaje"]= validacionFormularios::comprobarAlfaNumerico($_POST['mensaje'], 50, 2, 1); //comprobamos el campo fecha
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
            if ($valor!=null){ //si el mensaje de error NO esta vacio
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
            }
        }
    }
    if (isset($_POST['enviar']) && $entradaOk==true){ // si se ha pulsado enviar y todo esta correcto
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        $nacimiento=$_POST['nacimiento'];
        $correo=$_POST['correo'];
        $mensaje=$_POST['mensaje'];
        $valoracion=$_POST['valoracion'];
        $redsocial=$_POST['redsocial'];

        echo "<p> Nombre: $nombre </p>"; //mostramos los datos por pantallas
        echo "<p> Edad: $edad </p>"; //mostramos los datos por pantallas
        echo "<p> Fecha Nacimiento: $nacimiento </p>"; //mostramos los datos por pantallas
        echo "<p> Correo: $correo </p>"; //mostramos los datos por pantallas
        echo "<p> Correo: $mensaje </p>"; //mostramos los datos por pantallas
        echo "<p> Valoracion: $valoracion </p>";
        echo "Red social: ";
        foreach($redsocial as $valor){
            echo $valor;
        }

    }else{  //Si hay algun error mostramos el formulario con los mensajes de error
    ?>
                <div class="col-md-10"style="padding-top: 1%;" >
                    <h2>EJERCICIO 23</h2>
                    <div style="background-color:#f9f9f9">
                            <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="nombre" class="control-label col-md-2">Nombre:</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorNombre'])){echo $mensajeError['errorNombre'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="control-label col-md-2">Edad:</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="0" <?php if(isset($_POST['edad']) && empty($mensajeError['errorEdad'])){ echo 'value="',$_POST['edad'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorEdad'])){echo $mensajeError['errorEdad'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="nacimiento">Fecha de nacimiento:</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento" <?php if(isset($_POST['nacimiento']) && empty($mensajeError['errorFechaNacimiento'])){ echo 'value="',$_POST['nacimiento'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorFechaNacimiento'])){echo $mensajeError['errorFechaNacimiento'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="correo">Correo:</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" <?php if(isset($_POST['correo']) && empty($mensajeError['errorCorreo'])){ echo 'value="',$_POST['correo'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorCorreo'])){echo $mensajeError['errorCorreo'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="mensaje">Mensaje:</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje:" name="mensaje"><?php if(isset($_POST['mensaje']) && empty($mensajeError['errorMensaje'])){ echo $_POST['mensaje'];'"';}?></textarea>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorMensaje'])){echo $mensajeError['errorMensaje'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="valoracion">Valoración:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="mucho" <?php if(!isset($_POST['valoracion'])){ echo "checked" ;}?>
                                <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="mucho" ){ echo "checked";}?>>Mucho
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="poco" <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="poco" ){ echo "checked";}?>>Poco
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="nada" <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="nada" ){ echo "checked";}?>>Nada
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="redsocial">Redes Sociales:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="twitter" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="twitter" ){ echo "checked";}?>>Twitter
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="facebook" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="facebook" ){ echo "checked";}?>>Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="instagram" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="instagram" ){ echo "checked";}?>>Instagram
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="ninguno" <?php if(!isset($_POST['redsocial'])){ echo "checked" ;}?>>Ninguno
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <input type="submit" name="enviar" class="btn btn-primary" value="Enviar"/>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php }?>
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
