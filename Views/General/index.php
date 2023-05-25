<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header bg-dark text-white">
        Datos del LocalStorage
    </div>
    <div class="card-body">
        <table id="datosTabla" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Precio Bajo</th>
                    <th>Precio Medio</th>
                    <th>Precio Alto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Obtener los datos del localStorage
    var datosTotalesJSON = localStorage.getItem('datosTotales');
    var datosTotales = JSON.parse(datosTotalesJSON);

    // Obtener la referencia a la tabla
    var tabla = document.getElementById('datosTabla');

    // Variables para almacenar los totales
    var totalBajo = 0;
    var totalMedio = 0;
    var totalAlto = 0;

    if (datosTotales && datosTotales.length > 0) {
        // Iterar sobre los datos y agregar filas a la tabla
        for (var i = 0; i < datosTotales.length; i++) {
            var datos = datosTotales[i];
            var fila = tabla.insertRow();

            var nombreCell = fila.insertCell();
            nombreCell.textContent = datos.nombre;

            var fechaCell = fila.insertCell();
            fechaCell.textContent = datos.fecha;

            var precioBajoCell = fila.insertCell();
            precioBajoCell.textContent = "S/ " + datos.precioBajoT;

            var precioMedioCell = fila.insertCell();
            precioMedioCell.textContent ="S/ " + datos.precioMedioT;

            var precioAltoCell = fila.insertCell();
            precioAltoCell.textContent = "S/ " + datos.precioAltoT;

            // Sumar los valores a los totales correspondientes
            totalBajo += parseFloat(datos.precioBajoT);
            totalMedio += parseFloat(datos.precioMedioT);
            totalAlto += parseFloat(datos.precioAltoT);

            // Agregar una columna para las acciones
            var accionesCell = fila.insertCell();
            var eliminarBtn = document.createElement('button');
            eliminarBtn.textContent = 'Eliminar';
            eliminarBtn.setAttribute('data-indice', i); // Almacenar el índice en el atributo "data-indice"
            eliminarBtn.classList.add('btn', 'btn-danger'); //Estilo del botón
            eliminarBtn.addEventListener('click', function(e) {
                // Obtener el índice del botón que fue clickeado
                var indice = e.target.getAttribute('data-indice');

                // Eliminar el dato correspondiente del arreglo datosTotales
                datosTotales.splice(indice, 1);

                // Actualizar el localStorage con el arreglo actualizado
                localStorage.setItem('datosTotales', JSON.stringify(datosTotales));

                // Eliminar la fila de la tabla
                tabla.deleteRow(parseInt(indice) + 1); // Se suma 1 para tener en cuenta la fila de encabezados

                // Recalcular los totales
                totalBajo = 0;
                totalMedio = 0;
                totalAlto = 0;
                for (var j = 0; j < datosTotales.length; j++) {
                    totalBajo += parseFloat(datosTotales[j].precioBajoT);
                    totalMedio += parseFloat(datosTotales[j].precioMedioT);
                    totalAlto += parseFloat(datosTotales[j].precioAltoT);
                }

                // Actualizar los totales en la fila correspondiente
                var filaTotal = tabla.rows[tabla.rows.length - 1];
                var totalBajoCell = filaTotal.cells[2];
                var totalMedioCell = filaTotal.cells[3];
                var totalAltoCell = filaTotal.cells[4];
                totalBajoCell.textContent = totalBajo.toFixed(2);
                totalMedioCell.textContent = totalMedio.toFixed(2);
                totalAltoCell.textContent = totalAlto.toFixed(2);
            });

            accionesCell.appendChild(eliminarBtn);
        }

        // Agregar fila para mostrar los totales
        var filaTotal = tabla.insertRow();
        var totalCell = filaTotal.insertCell();
        totalCell.textContent = 'Total:';
        var totalBajoCell = filaTotal.insertCell();
        totalBajoCell.textContent = " ";
        var totalBajoCell = filaTotal.insertCell();
        totalBajoCell.textContent = "S/ " + totalBajo.toFixed(2);
        var totalMedioCell = filaTotal.insertCell();
        totalMedioCell.textContent = "S/ " + totalMedio.toFixed(2);
        var totalAltoCell = filaTotal.insertCell();
        totalAltoCell.textContent = "S/ " + totalAlto.toFixed(2);
    } else {
        // Mostrar mensaje de que no hay datos disponibles
        var fila = tabla.insertRow();
        var mensajeCell = fila.insertCell();
        mensajeCell.colSpan = 6;
        mensajeCell.textContent = 'No hay datos disponibles';
    }
</script>


<?php include "Views/Templates/footer.php"; ?>
