<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Asistenca</title>

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalizer.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- .CSS -->
</head>
<body>
    <header class="header">
        <h1 class="header__titulo">Sistema de Asistencia</h1>
    </header>
    <main class="contenedor">
        <div class="contenedor_lector">
            <div class="contenedor__botones">
                <a class="contenedor__boton contenedor__boton--camera" id="start-btn">📷</a>
                <a class="contenedor__boton contenedor__boton--reset" id="stop-btn">✖️</a>
            </div>
            <video id="video"   class="contenedor__imagen"></video>
            <div class="contenedor__resultado">
                <label>Resultado:</label>
                <p class="contenedor__resultado" id="result">Example</p>
            </div>
        </div>
        <div class="contenedor__registros">
            <p>Lorem, ipsum dolor sit amet consectetuveritatis iste.</p>
            
            <table> 
                <tr> 
                    <td>ID</td> 
                    <td>hash</td> 
                    <td>Invitados </td> 
                    <td>Disponibilidad </td> 
                </tr>
                <?php 
                    include_once("config/config.php");
                    $query = "SELECT * FROM invitados";

                    if ($result = $conn->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["id"];
                            $field2name = $row["hash"];
                            $field3name = $row["capacidad"];
                            $field4name = $row["disponible"];

                            echo '<tr> 
                                    <td>'.$field1name.'</td> 
                                    <td>'.$field2name.'</td> 
                                    <td>'.$field3name.'</td> 
                                    <td>'.$field4name.'</td> 
                                </tr>';
                        }
                        $result->free();
                    } 
                ?>
            </table>

        </div>
    </main>
</body>
<!-- Scripts -->
<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest/umd/index.min.js"></script>
<script src="assets/js/main.js"></script>
</html>