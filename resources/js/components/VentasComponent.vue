<template>
 <div class="container">
        <h1 class="display-6 text-muted">Registros de ventas </h1>
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Cedula</label>
                <input class="form-control" type="text" placeholder="ingrese la cedula del cliente" aria-label="default input example">
            </div>
             <h2 class="display-6 text-muted">factura </h2>
             <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        </div>
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Total</th>
                    <th scope="col">Total apagar</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td>Jabón azul</td>
                    <td>2000</td>
                    <td>0</td>
                    <td>6000</td>
                    <td>6000</td>
                    <td>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-primary">Aceptar</button>
                    </td>
                </tr>

            </tbody>
        </table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="text" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="number" placeholder="Ingrese la cantidad del producto">
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="number" placeholder="Ingrese el precio unitario">
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="number" placeholder="Ingrese el descuento promocional del producto">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-danger" type="button">Rechazar</button>
            <button class="btn btn-primary" type="button">Vender</button>
          </div>
          

        </div>
    </div>
     
</template>

<script>

</script>