<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModelo extends Model
{
    function addHotel($nombre, $apellido, $pais, $ciudad, $correo, $contraseña, $rol, $foto, $resena){

        $sql = "INSERT INTO registrousu (nombre, apellido, pais, ciudad, correo, contraseña, rol, foto, resena) VALUES ('{$nombre}', '{$apellido}', '{$pais}', '{$ciudad}', '{$correo}', '{$contraseña}', '{$rol}', '{$foto}', '{$resena}')";

        $this->db->query($sql);
    }
    
    function readHotel(){
        $sql = "SELECT * FROM registrousu";
        $hote = $this->db->query($sql);
        return($hote->getResult());
    }

    function readUsuarioemail($correo){
        $sql = "SELECT * FROM registrousu WHERE correo='{$correo}'";
        $hote = $this->db->query($sql);
        return($hote->getResultArray());
    }

    function deleteUsuario($id){
        $sql = "DELETE FROM registrousu WHERE id ={$id}";
        $this->db->query($sql);
    }

    function getUsuario($id){
        $sql = "SELECT * FROM registrousu WHERE id ={$id}";
        $hot = $this->db->query($sql);
        return($hot->getResult()); 
    }

    function upddateEditUsuario($id, $nombre, $apellido, $pais, $ciudad, $correo, $contraseña, $rol, $foto, $resena){
        $sql = "UPDATE registrousu SET nombre='{$nombre}', apellido='{$apellido}', pais='{$pais}', ciudad='{$ciudad}', correo='{$correo}', contraseña='{$contraseña}', rol='{$rol}', foto='{$foto}', resena='{$resena}' WHERE id={$id}";
        $this->db->query($sql);
    }

    
}