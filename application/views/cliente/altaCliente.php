<div class="container-fluid">
    <div class="row">
        <form class="col-sm-8 form-horizontal" action='<?= base_url('cliente/addCliente') ?>' method="POST">
            <fieldset>
                <h4>
                    Cliente
                </h4>
                <div class="control-group">
                    <label class="control-label"  for="nombreCliente">Nombre del Cliente</label>
                    <div class="controls">
                        <input type="text" id="nombreCliente" name="nombreCliente" placeholder="" class="form-control input-lg">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="rfcCliente">RFC del Cliente</label>
                    <div class="controls">
                        <input type="text" id="rfcCliente" name="rfcCliente" placeholder="" class="form-control input-lg">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="statusCliente">Status del Cliente</label>
                    <div class="controls">
                        <input type="text" id="statusCliente" name="statusCliente" placeholder="" class="form-control input-lg">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label"  for="telefonoCliente">Telefono del Cliente</label>
                    <div class="controls">
                        <input type="text" id="telefonoCliente" name="telefonoCliente" placeholder="" class="form-control input-lg">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div><!--/row-->
</div><!--/container-->