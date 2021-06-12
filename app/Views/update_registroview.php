

<div class="container-fluid">
    <form method="POST" action="<?php echo base_url()?>/update-edited-registro?id=<?php echo $hotel->id ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 col-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $hotel->nombre; ?>" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" value="<?php echo $hotel->apellido; ?>" name="apellido" class="form-control" id="apellido">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="pais"  class="form-label">Pais</label>
                <input type="text" value="<?php echo $hotel->pais; ?>" name="pais" class="form-control" id="pais" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" value="<?php echo $hotel->ciudad; ?>" name="ciudad" class="form-control" id="ciudad">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="correo"  class="form-label">Correo</label>
                <input type="email" value="<?php echo $hotel->correo; ?>" name="correo" class="form-control" id="correo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="foto"  class="form-label">Foto de perfil</label>
                <input type="file" value="<?php echo $hotel->foto; ?>" name="foto" class="form-control" id="foto" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="text" value="<?php echo $hotel->contraseña; ?>" name="contraseña" class="form-control" id="contraseña" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="rol"  class="form-label">Tipo de usuario</label>
                <select class="form-select" value="<?php echo $hotel->rol; ?>" name="rol" aria-label="Default select example">
                    <option value="Anfitrion">Anfitrion</option>
                    <option value="Invitado">Invitado</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-10">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reseña del apartamento</label>
                    <textarea class="form-control" value="<?php echo $hotel->resena; ?>" name="resena" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#terminosycondiciones">
                Terminos y condiciones
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="terminosycondiciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="terminosycondiciones">Terminos y condiciones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>