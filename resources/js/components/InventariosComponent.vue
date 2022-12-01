<template>
 <div class="container">
        <h1 class="display-6 text-muted">Consultas de inventarios </h1>
        
       
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <div class="row"><div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Fecha inicio</option>
                      <option value="1">10/09/2022</option>
                      <option value="2">20/09/2022</option>
                      <option value="3">30/09/2022</option>
                    </select>
                    <label for="floatingSelect">Fecha inicio</label>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-6 col-lg-12 col-md-6 ">
                <div class="row"><div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Fecha final</option>
                      <option value="1">10/09/2022</option>
                      <option value="2">20/09/2022</option>
                      <option value="3">30/09/2022</option>
                    </select>
                    <label for="floatingSelect">Fecha final</label>
                  </div>
                </div>
            </div>
        </div>


        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cantidad vendida</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">Cantidad disponible</th>
                        <th scope="col">Cantidad maxima</th>
                        <th scope="col">Precio de compra</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Total venta</th>
                        <th scope="col">Total ganancia</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">56</th>
                        <td>Jabón azul</td>
                        <td>44</td>
                        <td>100</td>
                        <td>1500</td>
                        <td>2000</td>
                        <td>120000</td>
                        <td>28</td>

                    </tr>
    
                </tbody>
            </table>

        <button type="button" class="btn btn-primary">Consultar</button>
        <button type="button" class="btn btn-warning">Imprimir</button>
          </div>
        </div>
 
</template>

<script>

</script>