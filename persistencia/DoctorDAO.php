<?php
include("Conexion.php");
class DoctorDAO
{

    private $nombre;
    private $id;
    private $especialidad;

    private $con;
    public function __construct($nombre = '', $id = '', $especialidad = '')
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->especialidad = $especialidad;
    }
    public function consultar()
    {
        try {
            $this->con = new Conexion();
            $this->con->abrir();
            $sql = "SELECT idMedico, nombre, apellido, correo FROM Medico;";
            $this->con->ejecutar($sql);
            $resultado = $this->con->registro();
            $this->con->cerrar();
            return $resultado;
        } catch (Exception $e) {
            echo 'Error' . $e->getMessage();
        }

    }
}
?>