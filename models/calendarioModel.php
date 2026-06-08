<?php
require_once __DIR__ . '/../config/db.php';

class calendarioModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = db::conexion(); // Tu conexión PDO
    }

    public function obtenerEventos()
    {
        $sql = "
            SELECT p.descripcion, p.estado, f.fecha_inicio, f.fecha_fin
            FROM pedidos p
            INNER JOIN fechas f ON p.id_fecha = f.id_fecha
            WHERE p.estado IN ('reservado', 'pagado', 'completado')
        ";

        $stmt = $this->conexion->query($sql);
        $eventos = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $color = match($row['estado']) {
                'completado' => '#28a745',
                'pagado'     => '#17a2b8',
                'reservado'  => '#007bff',
                default      => '#6c757d',
            };

            $eventos[] = [
                'title' => $row['descripcion'],
                'start' => date(DATE_ISO8601, strtotime($row['fecha_inicio'])),
                'end'   => date(DATE_ISO8601, strtotime($row['fecha_fin'])),
                'color' => $color
            ];
        }

        return $eventos;
    }
}
