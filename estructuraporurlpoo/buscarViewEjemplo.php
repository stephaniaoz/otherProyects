<div class="table-responsive">
  <table class="table table-striped hola">
    <thead class="thead-light">
      <tr>
        <th scope="col">ejemplo</th>
        <th scope="col">#</th>
        <th scope="col">ejemplo</th>
        <th scope="col">ejemplo</th>
        <th scope="col">ejemplo</th>
        <th scope="col">Observación</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $key) {
        $codigo = $key->codigo;
				echo "<tr class='alinear'>
                <td>
                  <a class='btn btn-primary' href='javascript:formEditar(".$codigo.")'>Editar</a>
                  <!-- <a class='btn btn-success' href='javascript:verMas(".$codigo.")'>Ver más</a> -->
                  <!-- <a class='btn btn-success' id='vermas'>Ver más</a> -->
                  <a href='#myModal$codigo' class='btn btn-success' data-toggle='modal' id='vermas'>Ver más</a>
                  <!-- <button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal'>Ver más</button> -->
                </td>
								<th scope='row'>".$key->codigo."</th>
								<td>".$key->ejemplo."</td>
								<td>".$key->ejemplo."</td>
								<td>".$key->ejemplo."</td>
								<td>".$key->observacion."</td>
							</tr>
              <!-- Modal -->
              <div class='modal fade' id='myModal$codigo' role='dialog'>
                <div class='modal-dialog' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLongTitle'>Modal title$codigo</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      ".$key->ejemplo."
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                      <!-- <button type='button' class='btn btn-primary'>Save changes</button> -->
                    </div>
                  </div>
                </div>
              </div>
              ";

			} ?>
      <form name="formulario" method="post">
        <input type="hidden" id="controller" value="ejemplo"></input>
        <input type="hidden" id="action" value="formEditar"></input>
      </form>
    </tbody>
  </table>
</div>
