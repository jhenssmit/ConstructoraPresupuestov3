<?php
include "Views/Templates/header.php"; ?>
<div class="card">
    <div class="card-header bg-dark text-white">
        Materiales Techos
    </div>
    
<div class="card-body">   
<button class="btn btn-success mb-2" type="button"><a class="dropdown text-white" href="<?php echo base_url; ?>MateTechos" ><i class="fas fa-solid fa-eye"></i></a></button>
<table class="table table-light table-bordered table-hover" id="tblMateTechoIn">
    <thead class="thead-dark">
        <tr>
            <th>Elemento</th>
            <th>Nombre</th>
            <th>Unidad de Medida</th>
            <th>Cantidad</th>
            <th>PrecioBajo</th>
            <th>PrecioMedio</th>
            <th>PrecioAlto</th>
            <th>Estado</th>
            <th></th>
            <th hidden></th>
            <th hidden></th>
            <th hidden></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>

<?php include "Views/Templates/footer.php"; ?>