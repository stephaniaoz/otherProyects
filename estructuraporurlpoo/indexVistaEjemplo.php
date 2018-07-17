<div class="container">
    <div class="main container">
        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="card">
                <h5 class="card-header text-center header">Registrar ejemplo</h5>
                <div class="card-body">
                    <form method="post" name="formulario" action="<?php echo $helper->getUrl("dispositivoGps","crear"); ?>">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input class="form-control" type="text" name="ejemplo" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input type="text" class="form-control" id="ejemplo" name="ejemplo" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input type="text" class="form-control" id="ejemplo" name="ejemplo" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <select class="form-control" id="sel1" name="selectejemplo">
                                          <option>ejemplo</option>
                                          <option>ejemplo</option>
                                          <option>ejemplo</option>
                                          <option>ejemplo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">ejemplo</label>
                                <textarea class="form-control" rows="5" id="comment" name="observacion"></textarea>
                            </div>
                            <input type="hidden" id="controller" value="ejemplo"></input>
                            <button type="submit" class="btn btn-primary">Grabar</button>
                            <button type="reset" class="btn btn-primary">Limpiar</button>
                            <a class="btn btn-primary" href="javascript:accionboton('buscar')">Buscar</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
