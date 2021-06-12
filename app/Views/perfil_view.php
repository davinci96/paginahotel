<form>
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 col-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-5">
                <label for="pais" class="form-label">Pais</label>
                <input type="text" class="form-control" id="pais" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-5">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad">
            </div>
        </div>
        <div class="row">
        <div class="mb-3 col-5">
                <label for="foto" class="form-label">Foto</label>
                <input type="text" class="form-control" id="foto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Biografia</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        <button type="submit" class="btn btn-primary">Resgistrarme</button>
    </div>
</form>