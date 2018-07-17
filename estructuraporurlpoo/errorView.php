<div class="alert alert-success" style="visibility:<?php if($mensajeCorrecto=='success'){echo 'visible';}else{echo 'hidden';} ?> " >
  <strong>Success!</strong> <?php echo $mensajeCorrecto; ?>
</div>

<div class="alert alert-danger" style="visibility:<?php if($mensajeError != 'success' && $mensajeError != ''){echo 'visible';}else{echo 'hidden';} ?> ">
  <strong>Danger!</strong> <?php echo $mensajeError; ?> <br>Indicates a dangerous or potentially negative action.
</div>
<!--
<div class="alert alert-info">
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>

<div class="alert alert-warning">
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>


-->
