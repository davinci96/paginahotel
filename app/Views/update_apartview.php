

<form method="POST" action="<?php echo base_url() ?>/update-edit-apart?id=<?php echo $apartamento->id ?>" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 col-5">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" value="<?php echo $apartamento->ciudad; ?>" name="ciudad" class="form-control" id="ciudad" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="pais" class="form-label">Pais</label>
                <input type="text" value="<?php echo $apartamento->pais; ?>" name="pais" class="form-control" id="pais">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" value="<?php echo $apartamento->direccion; ?>" name="direccion" class="form-control" id="direccion" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="ubicacion" class="form-label">Ubicacion de google maps</label>
                <input type="text" value="<?php echo $apartamento->ubicacion; ?>" name="ubicacion" class="form-control" id="ubicacion">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="numero" class="form-label">Numero de habitaciones</label>
                <input type="number" value="<?php echo $apartamento->num_habitacion; ?>" name="num_habitacion" class="form-control" id="numero" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="imagenes" class="form-label">Imagenes del apartamento</label>
                <input type="text" value="<?php echo $apartamento->imagenes; ?>" name="imagenes" class="form-control" id="imagenes" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="imagen" class="form-label">Imagen destacada</label>
                <input type="file" value="<?php echo $apartamento->imagen_destacada; ?>" name="imagen_destacada" class="form-control" id="imagen" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="valor" class="form-label">Valor por noche</label>
                <input type="number" value="<?php echo $apartamento->valor; ?>" name="valor" class="form-control" id="valor" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-10">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reseña del apartamento</label>
                    <textarea class="form-control" value="<?php echo $apartamento->resena; ?>" name="resena" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    </div>
</form>