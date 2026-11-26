
<?php

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $destinos = $_POST['destinos'] ?? [];
    $actividades = $_POST['actividades'] ?? [];
    $servicios = $_POST['servicios'] ?? [];

    $totalDestinos = count($destinos);
    $totalActividades = count($actividades);
    $totalServicios = count($servicios);

    $totalGeneral = $totalDestinos + $totalActividades + $totalServicios;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado del paquete</title>
</head>
<body>

<body style="background-color: #ccf5fd;  font-family: georgia;">
    <h1>Resumen de tu paquete turistico</h1>

    <h2>Datos del cliente</h2>

    <?php
        echo "Nombre: " . $nombre . "<br>";
        echo "Correo: " . $correo . "<br>";
    ?>


    <h2>Destinos seleccionados:</h2>

    <?php
        if(count($destinos) > 0){
            foreach($destinos as $de){
                echo $de . "<br>";
            }
        }else{
            echo "No seleccionaste ningun elemento";
        }

        echo "<br>Total de destinos: " . $totalDestinos;
    ?>


    <h2>Actividades seleccionadas:</h2>

    <?php
        if(count($actividades) > 0){
            foreach($actividades as $ac){
                echo $ac . "<br>";
            }
        }else{
            echo "No selecciono ninguna opcion";
        }

        echo "<br>Total de actividades: " . $totalActividades;
    ?>


    <h2>Servicios adicionales seleccionados:</h2>

    <?php
        if(count($servicios) > 0){
            foreach($servicios as $se){
                echo $se . "<br>";
            }
        }else{
            echo "No seleccionaste ningun elemento";
        }

        echo "<br>Total de servicios: " . $totalServicios;
    ?>


    <h2>Total general de elementos seleccionados:</h2>

    <?php
        echo $totalGeneral;
    ?>

    <br><br>

    <a href="index.php">Regresar al formulario</a>


</body>
</html>
