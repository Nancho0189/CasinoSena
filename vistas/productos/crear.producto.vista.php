  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Producto</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ingresar datos del Producto</h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="inputRol" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputRol" placeholder="Ingrese el Nombre del Producto">
                            </div>

                            <label for="inputRol" class="col-sm-2 col-form-label">Codigo</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputRol" placeholder="Ingrese el Codigo del Producto">
                            </div>

                            <label for="inputRol" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputRol" placeholder="Ingrese el Precio del Producto">
                            </div>

                        </div>
                    </div>
                </div>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer float-right">
                <a href="#" class="btn btn-success btn-sm"><span>Guardar</span></a>
                <a href="index.php?ruta=productos/productos" class="btn btn-danger btn-sm"><span>Cancelar</span></a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->