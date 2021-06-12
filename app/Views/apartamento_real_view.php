<div class="container">
 <div class="row">
<?php 
    foreach($apart as $item){

        $deleteroute= base_url()."/delete-apart?id={$item->id}";
        $updateroute= base_url()."/update-apart?id={$item->id}";
        $template="
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
        <div class='card' style='width: 18rem;'>
        <img src='{$item->imagen_destacada}' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>{$item->ciudad}</h5>
          <p class='card-text'>{$item->resena}</p>
          <a href='{$deleteroute}' class='btn btn-primary'>Eliminar</a>
          <a href='{$updateroute}' class='btn btn-primary'>Actualizar</a>
        </div>
      </div>
      </div>";

       echo $template;
    }