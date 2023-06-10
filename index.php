<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP_AND SQL</title>
</head>
<body>


    <div class="dates">
        <h1> Tabla de estudiantes usando PHP y Conexión SQL</h1>
        <h3>Introducción a los Sistemas de Computo </h3>
    </div>
<br><br>
<div class="table">  
        <?php
    // Abrir la conexión con la base de datos PHPADMIN
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final_1166', 'root', '', $pdo_options);

    // EJECUTAR CONSULTA
    $select = $conexion->query("SELECT Carnet, Nombre, Grado, Telefono FROM alumno");

    ?>
    <table>
        <thead class = "navbar">
        <tr>
            <th>Carnet</th>
            <th>Nombre</th>
            <th>Grado</th>
            <th>Telefono</th>
        </tr>
        </thead>
        <tbody class= "body">
        <?php 
        foreach ($select->fetchAll() as $alumno) { ?>
            <tr>
                <td>
                    <?php echo $alumno["Carnet"]; ?>
                </td>
                <td>
                    <?php echo $alumno["Nombre"]; ?>
                </td>
                <td>
                    <?php echo $alumno["Grado"]; ?>
                </td>
                <td>
                    <?php echo $alumno["Telefono"]; ?>
                </td>
            </tr>
            <?php } ?>
    </tbody>
    </table>
</div>
</body>
</html>