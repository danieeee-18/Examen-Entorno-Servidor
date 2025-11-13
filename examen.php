<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor - Daniel Galacho</title>
</head>
<body>
 
 
    <?php
        //Definimos las variables de php
        $nombre_alumno="Daniel Galacho";
        $modulo="Desarrollo Web en Entorno Servidor";
        $nota_media= 7.5;
        $es_matriculado=true;
 
        //Impresiones con echo
        echo "<h1>$nombre_alumno</h1>";
        echo "<h2> $modulo </h2>";
        echo "Mi nota media actual es: $nota_media <br>";
        echo 'Mi nota media actual es: $nota_media <br>';
 
        //Logica Condicional
        //En este ejercicio utilizamos  if-elseif-else en el apartado sobresaliente he pueste nueve y mas en elseif porque lo pone en la hoja no lo he limitado a 10 por lo mismo
        //Despues he creado un else por si la nota esta mal puesta, por ejemplo si salen en tipo String
 
        if ($nota_media<5){
            echo "Suspenso";
        }elseif($nota_media>=5 && $nota_media<7){
            echo "Aprobado";
        }elseif($nota_media>=7 && $nota_media<9){
            echo "Notable";
        }elseif($nota_media>=9){
            echo "Sobresaliente";
        }else{
            echo "Esta nota no es valida";
        }
        echo "<br>";
 
        //Aqui utilizamos  if-else con el doble igual para que solo coja el valor que es true
        if ($es_matriculado==true){
            echo "Estado: Alumno Matriculado";
        }else{
            echo "Estado: Alumno No Matriculado";
        }
 
 
        //Bucle While
        // He añadido saltos de linea
 
        $i=1;
        echo "<br>";
        while($i<6){
            echo "<tr>";
            echo "<td> Fila número </td>";
            echo "<td>$i</td>";
            echo "</tr>";
            echo  "<br>";
            $i++;
        }
 
    ?>
</body>
</html>
 