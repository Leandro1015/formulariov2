<?php
    //usando if...else
    echo "<h3>Datos enviados desde el formulario:</h3>";

    if (!empty($_POST['texto'])) {
        echo "Nombre: ".$_POST["texto"]."<br>";
    } else {
        echo "No se ha introducido ningún nombre";
    }

    echo "<br/><br/>";

    if (isset($_POST['estudiante'])) {
        echo "¿Eres Estudiante?: Si<br/>";
    } else {
        echo "¿Eres Estudiante?: No<br/>";
    }

    echo "<br/><br/>";

    if (isset($_POST['opcion'])) {
        echo "Actividades seleccionadas: ";
        $actividades = $_POST['opcion'];
        $numActividades = count($actividades);
        $i = 1;
        foreach ($actividades as $actividad) {
            echo $actividad;
            if ($i < $numActividades) {
                echo ", ";
            }
            $i++;
        }
        echo "<br/>";
    } else {
        echo "No se ha seleccionado ninguna actividad";
    }
    
    echo "<br/><br/>";

    if (isset($_POST['radio1'])) {
        echo "Nivel educativo: " . $_POST['radio1'] . "<br/>";
    } else {
        echo "No se ha seleccionado ningún nivel educativo";
    }

    echo "<br/><br/>";

    if (isset($_POST['aceptar'])) {
        echo "Los términos han sido aceptados: ".$_POST['aceptar']."<br>";
    } else {
        echo "Los términos no han sido aceptados.";
    }

    echo "<br/><br/>";

    if (isset($_POST['motivo_contacto'])) {
        echo "Motivo de contacto: " . $_POST['motivo_contacto']."<br>";
    } else {
        echo "Motivo de contacto no especificado";
    }

