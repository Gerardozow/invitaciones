<?php
include_once("config/config.php");
$valor = $_POST["valor2"];
if ($valor == "") {
    header("Location: index.php");
} else {
    $query = "insert into invitados (Invitado,IdInvitacion,NPases,PasesUsados,Estatus) VALUES ('$valor','010423GBoda0002',4,0,0)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: index.php");
}

?>