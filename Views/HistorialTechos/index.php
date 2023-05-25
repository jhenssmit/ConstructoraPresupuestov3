<?php
include "Views/Templates/header.php"; 
?>

<div class="card">
    <div class="card-header bg-dark text-white">
        Historial Techos
    </div>
<div class="card-body pt-0 pb-0">   
    <br>
    <style>
  .table {
    border-collapse: collapse; /* Combina los bordes adyacentes en uno solo */
  }
  
  .table th, .table td {
    border: 1px solid black; /* Establece un borde de 1 píxel para las celdas */
    padding: 8px; /* Añade un espacio interno a las celdas para mayor legibilidad */
  }
  
  .table.thick-border th, .table.thick-border td {
    border-width: 2px; /* Establece el ancho del borde en 2 píxeles */
  }
</style>

<?php
try {
    // Obtener la conexión PDO
    $pdo = new PDO("mysql:host=localhost;dbname=constructora", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Consultar los registros agrupados por fecha
    $stmt = $pdo->query("SELECT DISTINCT fechaEnv FROM historial WHERE idElemento = '2' ORDER BY fechaEnv DESC");
    $fechas = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Iterar por cada fecha y mostrar la tabla correspondiente
    foreach ($fechas as $fecha) {
        // Obtener los registros para la fecha actual
        $stmt = $pdo->prepare("SELECT * FROM historial WHERE fechaEnv = ?");
        $stmt->execute([$fecha]);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Obtener el valor de precioBajoT del último registro
        $precioBajoT = $resultados[count($resultados) - 1]['precioBajoT'];
        $precioMedioT = $resultados[count($resultados) - 1]['precioMedioT'];
        $precioAltoT = $resultados[count($resultados) - 1]['precioAltoT'];
        // Construir la tabla para la fecha actual
        $tablaHTML = '<table class="table table-light table-bordered table-hover">
                        <caption>Fecha: ' . $fecha . '</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio Bajo</th>
                                <th>Precio Medio</th>
                                <th>Precio Alto</th>
                            </tr>
                        </thead>
                        <tbody>';

        $totalCantidad = 0;
        $totalPrecioBajo = 0;
        $totalPrecioMedio = 0;
        $totalPrecioAlto = 0;

        foreach ($resultados as $registro) {
            $nombre = $registro['nomMaterial'];
            $cantidad = $registro['cantidad'];
            $precioBajo = $registro['precioBajoMate'];
            $precioMedio = $registro['precioMedioMate'];
            $precioAlto = $registro['precioAltoMate'];
            $manoObra = $registro['manoObra'];

            $fila = '<tr>
                        <td>' . $nombre . '</td>
                        <td>' . $cantidad . '</td>
                        <td>S/' . $precioBajo . '</td>
                        <td>S/' . $precioMedio . '</td>
                        <td>S/' . $precioAlto . '</td>
                    </tr>';

            $tablaHTML .= $fila;

            // Calcular totales
            $totalCantidad += $cantidad;
            $totalPrecioBajo += $precioBajo;
            $totalPrecioMedio += $precioMedio;
            $totalPrecioAlto += $precioAlto;
        }

        $tablaHTML .= '<tfoot>
                        <tr>
                            <td colspan="2"><strong>Total:</strong></td>
                            <td>S/' . $precioBajoT . '</td>
                            <td>S/' . $precioMedioT . '</td>
                            <td>S/' . $precioAltoT . '</td>
                        </tr>
                    </tfoot>';
                    $tablaHTML .= '<tfoot>
                    <tr>
                        <td colspan="2"><strong>manoObra:</strong></td>
                        <td>S/' . $manoObra . '</td>
                        <td>S/' . $manoObra . '</td>
                        <td>S/' . $manoObra . '</td>
                    </tr>
                </tfoot>';

        $tablaHTML .= '</tbody></table>';

    
        $tablaHTML .= '<form method="POST" action="http://localhost/constructora/Views/Eliminar/eliminarHistorialTecho.php">
                  <input type="hidden" name="fecha" value="' . $fecha . '">
                  <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
              </form><br>';

        // Mostrar la tabla en la página
        echo $tablaHTML;
    }
} catch (PDOException $e) {
    echo "Error al obtener los datos de la base de datos: " . $e->getMessage();
}

include "Views/Templates/footer.php";
?>
  </div>
</div>