<?php
$nombres = ['Alex','Sofia','Pepe','Maria'];
echo "Numero de elementos: " . (count($nombres));

echo "<br> Alumnos: " . (implode(' ',$nombres)) . "<br>";

$nomOrdenado = $nombres;

asort($nomOrdenado);

foreach($nomOrdenado as $key => $val){
    echo " $val";
}

$pos = array_search('Alex', $nombres);
echo "<br>Posición de mi nombre: " . ($pos);

$alumnos = [
    ["id" => 1,"nombre" => "Alex", "edad" => 19],
    ["id" => 2,"nombre" => "Sofia", "edad" => 19],
    ["id" => 3,"nombre" => "Pepe", "edad" => 20],
    ["id" => 4,"nombre" => "Maria", "edad" => 18]
];

$nomAlumnos = array_column($alumnos, "nombre");
echo "<br> Nombres de los alumnos: ";
print_r($nomAlumnos);
echo "<br>";

$numeros = [5,5,10,20,10,30,50,50,10,20];
$suma = array_sum($numeros);
echo "Suma del array = " . ($suma);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno["id"]; ?></td>
                <td><?php echo $alumno["nombre"]; ?></td>
                <td><?php echo $alumno["edad"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>