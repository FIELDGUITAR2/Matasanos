<?php
session_start();
$varsession = $_SESSION[""];
if($varsession == null || $varsession == ""){
    echo "Error no puedes iniciar";
    die();
}

$id = $_SESSION["id"];
$admin = new Admin($id);
$admin->consultar();
echo "Hola " . $admin->getNombre() . " " . $admin->getApellido();
?>

<?php
    include("Cabeza.php");
?>
    
<?php
    include("Pie.php");
?>

    

