<?php
    //usando SOLO echos sin ifs.
    echo "<h3>Datos enviados desde el formulario:</h3>";

    echo "Nombre = ".$_POST["texto"] . "<br/>";

    echo "Estudiante = ".$_POST["estudiante"] . "<br/>";

    echo "Actividades = ".$_POST["opcion"] [0]. "<br/>";

    echo "Nivel educativo: " . $_POST['radio1'] . "<br/>";

    echo "Los términos han sido aceptados: ".$_POST['aceptar'];

    echo "Motivo de contacto: ".$_POST['motivo_contacto'];
