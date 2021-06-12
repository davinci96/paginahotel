<?php

namespace App\Controllers;

use App\Models\HotelModelo;

class RegistroControlador extends BaseController
{
	public function index()
	{
		$hotel = new HotelModelo();
		$resulthotel = $hotel->readHotel();
		$data = array(
			"hote" => $resulthotel,
		);
		echo view('layouts/header');
		echo view('registro_real_view', $data);
		echo view('layouts/footer');
	}

	public function create()
	{
		echo view('layouts/header');
		echo view('registro_view');
		echo view('layouts/footer');
	}

	public function addRegistro()
	{
		$request = \Config\Services::request();
		$hotelModelo = new HotelModelo();
		$nombre = $request->getPost('nombre');
		$apellido = $request->getPost('apellido');
		$pais = $request->getPost('pais');
		$ciudad = $request->getPost('ciudad');
		$correo = $request->getPost('correo');
		$contraseña = $request->getPost('contraseña');
		$rol = $request->getPost('rol');
		$file = $request->getFile('foto');
		$fotoname = $file->getRandomName();
		$path = "";
		if ($file->isValid() && !$file->hasMoved()) {
			$file->move('./uploads/images/', $fotoname);
			$path = base_url() . "/uploads/images/" . $fotoname;
		}
		$resena = $request->getPost('resena');
		$hotelModelo->addHotel($nombre, $apellido, $pais, $ciudad, $correo, $contraseña, $rol, $path, $resena);
		return redirect()->to('/registro');
	}

	public function deleteRegistro()
	{
		$hotelModelo = new HotelModelo();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$hotelModelo->deleteUsuario($id);
		return redirect()->to('/registro');
	}

	public function updateRegistro()
	{
		$hotelModelo = new HotelModelo();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$hotel = $hotelModelo->getUsuario($id);
		echo view('layouts/header');
		echo view('update_registroview', array("hotel" => $hotel[0]));
		echo view('layouts/footer');
	}

	public function updateEditRegistro()
	{
		$hotelModelo = new HotelModelo();
		$request = \Config\Services::request();
		$nombre = $request->getPost('nombre');
		$apellido = $request->getPost('apellido');
		$pais = $request->getPost('pais');
		$ciudad = $request->getPost('ciudad');
		$correo = $request->getPost('correo');
		$contraseña = $request->getPost('contraseña');
		$rol = $request->getPost('rol');
		$file = $request->getFile('foto');
		$fotoname = $file->getRandomName();
		$path = "";
		if ($file->isValid() && !$file->hasMoved()) {
			$file->move('./uploads/images/', $fotoname);
			$path = base_url() . "/uploads/images/" . $fotoname;
		}
		$resena = $request->getPost('resena');
		$id = $request->getGet('id');
		$hotelModelo->upddateEditUsuario($id, $nombre, $apellido, $pais, $ciudad, $correo, $contraseña, $rol, $path, $resena);
		return redirect()->to('/registro');
	}
}
