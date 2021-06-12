<?php

namespace App\Models;

use CodeIgniter\Model;

class ApartModelo extends Model
{
    function addApart($id_usu,$ciudad,$pais,$direccion,$ubicacion,$num_habitacion,$imagenes,$imagen_destacada,$valor,$resena){

        $sql = "INSERT INTO apartamento (id_usu, ciudad, pais, direccion, ubicacion, num_habitacion, imagenes, imagen_destacada, valor, resena) VALUES ('{$id_usu}', '{$ciudad}', '{$pais}', '{$direccion}', '{$ubicacion}', '{$num_habitacion}', '{$imagenes}', '{$imagen_destacada}', '{$valor}', '{$resena}')";

        $this->db->query($sql);
    }

    function readApart(){
        $sql = "SELECT * FROM apartamento";
        $apart = $this->db->query($sql);
        return($apart->getResult());
    }
    
    function readApartid($id_usu){
        $sql = "SELECT * FROM apartamento WHERE id_usu='{$id_usu}'";
        $apart = $this->db->query($sql);
        return($apart->getResult());
    }

    function deleteApart($id){
        $sql = "DELETE FROM apartamento WHERE id ={$id}";
        $this->db->query($sql);
    }

    function getApart($id){
        $sql = "SELECT * FROM apartamento WHERE id ={$id}";
        $apart = $this->db->query($sql);
        return($apart->getResult()); 
    }

    function updateApart($id,$ciudad,$pais,$direccion,$ubicacion,$num_habitacion,$imagenes,$imagen_destacada,$valor,$resena){
        $sql = "UPDATE apartamento SET  ciudad='{$ciudad}', pais='{$pais}', direccion='{$direccion}', ubicacion='{$ubicacion}', num_habitacion='{$num_habitacion}', imagenes='{$imagenes}', imagen_destacada='{$imagen_destacada}', valor='{$valor}', resena='{$resena}' WHERE id={$id}";
        $this->db->query($sql);
    }
}