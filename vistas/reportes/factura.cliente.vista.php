  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1>Facturas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Nota:</h5>
              Esta página ha sido mejorada para su impresión. Haga clic en el botón Imprimir en la parte inferior de la factura para probar.
            </div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="#"></i> CASINOSena
                    <small class="float-right">Fecha: 16/10/2023</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <strong>De</strong><br>
                  <address>
                    CASINOSena<br>
                    Dirección Restaurante<br>
                    Ciudad Restaurante<br>
                    Telefono: (57) 123-5432-453<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Para</strong>
                  <address>
                    Hernan Castro<br>
                    Cedula: 300-539-1037<br>
                    Cargo: Patrullero<br>
                    Unidad: Armeria<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Factura #007612</b><br>
                  <br>
                  <b>Fecha:</b> 2/22/2014<br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Item</th>
                      <th>Producto</th>
                      <th>Descripción</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Desalluno</td>
                      <td>Desalluno del día</td>
                      <td>$8.000</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Otro</td>
                      <td>Jugo Hit</td>
                      <td>$2.000</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Metodos de Pago:</p>
                  <img src="./assets/temas/adminlte/dist/img/credit/visa.png" alt="Visa">
                  <img src="./assets/temas/adminlte/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="./assets/temas/adminlte/dist/img/credit/american-express.png" alt="American Express">

                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Monto adeudado 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$8.100</td>
                      </tr>
                      <tr>
                        <th>IVA (19%)</th>
                        <td>$1.900</td>
                     </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$10.000</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Pagar<a href="../Facturas/Imprimir_Factura.html" rel="noopener" target="_blank"></i></a>
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <a href="index.php?ruta=reportes/factura.pdf" class="fas fa-download"></a> Generar pdf
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>