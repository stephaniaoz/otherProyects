<div class="container">
    <div class="main container">
        <div class="panel panel-default" style="margin-top: 20px;">
            <div class="card">
                <h5 class="card-header text-center header">Editar ejemplo</h5>
                <div class="card-body">
                    <form method="post" name="formulario" action="<?php echo $helper->getUrl("dispositivoGps","editar"); ?>">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input class="form-control" type="text" name="ejemplo" value="<?php echo $data[0]->ejemplo; ?>" required>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input type="text" class="form-control" id="ejemplo" name="ejemplo" value="<?php echo $data[0]->ejemplo; ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <input type="text" class="form-control" id="ejemplo" name="ejemplo" value="<?php echo $data[0]->ejemplo; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ejemplo</label>
                                        <select class="form-control" id="sel1" name="selectoperador" value="<?php echo $data[0]->ejemplo; ?>">
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
                                <textarea class="form-control" rows="5" id="comment" name="ejemplo"><?php echo $data[0]->ejemplo; ?></textarea>
                            </div>
                            <input type="hidden" id="controller" value="ejemplo"></input>
                            <input type="hidden" name="id" value="<?php echo $data[0]->codigo; ?>"></input>
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <button type="reset" class="btn btn-primary">Limpiar</button>
                            <a class="btn btn-primary" href="javascript:accionboton('buscar')">Cancelar</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
