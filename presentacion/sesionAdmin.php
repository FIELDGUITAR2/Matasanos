<?php
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

    

