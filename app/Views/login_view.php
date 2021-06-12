<div class="container">
<form onsubmit="validar1()" method="POST" action="<?php echo base_url().'/signin' ?>">
  <div class="mb-3">
    <label for="correo" class="form-label">Correo electronico</label>
    <input type="email" name="correo" class="form-control" id="correo" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Ingrese correo inscrito en la cuenta</div>
  </div>
  <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" name="contrasena" class="form-control" id="contrasena" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>