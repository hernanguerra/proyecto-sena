<template>
<div class="container">
        <h1 class="display-6 text-muted">Registro de Productos </h1>
       
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Producto</label>
                <input class="form-control" type="text" placeholder="ingrese el nombre del producto" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Codigo</label>
                <input class="form-control" type="text" placeholder="ingrese el codigo del producto" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Precio de compra</label>
                <input class="form-control" type="text" placeholder="ingrese el precio de compra" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Precio de venta</label>
                <input class="form-control" type="text" placeholder="ingrese el precio de venta" aria-label="default input example">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div><div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <label class="col-sm-2 col-form-label">Catidad</label>
                <input class="form-control" type="text" placeholder="ingrese el precio de venta" aria-label="default input example">
            </div>
        </div>
    
        <div class="row"><div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>seleccione cantidad minima</option>
              <option value="1">10</option>
              <option value="2">20</option>
              <option value="3">30</option>
            </select>
            <label for="floatingSelect">cantidad minima</label>
          </div>
        </div>
    
        <div class="row"><div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>seleccione cantidad maxima</option>
              <option value="1">10</option>
              <option value="2">20</option>
              <option value="3">30</option>
            </select>
            <label for="floatingSelect">cantidad maxima</label>
          </div>
        
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">eliminar</button>
            <button type="button" class="btn btn-warning">editar</button>
            <button type="button" class="btn btn-success">aceptar</button>
          </div>
        </div>
        </div>
 
</template>

<script>

</script>