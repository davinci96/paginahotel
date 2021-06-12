<?php

namespace App\Controllers;

use App\Models\ApartModelo;

class ApartamentoregisControlador extends BaseController
{
	public function index()
	{
		$apartamento = new ApartModelo();
		$session = session();
		$id_usu = $session->get('id');
		$resulapartamento = $apartamento->readApartid($id_usu);
		$data = array(
			"apart" => $resulapartamento,
		);
		echo view('layouts/header');
		echo view('apartamento_real_view', $data);
		echo view('layouts/footer');
	}

	public function index1()
	{
		$apartamento = new ApartModelo();
		$session = session();
		if ($session->get('correo') != "" || $session->get('correo') != null) {
			$resulapartamento = $apartamento->readApart();
			$data = array(
				"apart" => $resulapartamento,
			);
			echo view('layouts/header');
			echo view('apartamento_real_view', $data);
			echo view('layouts/footer');
		} else {
			echo "no tiene permisos para acceder";
		}
	}


	public function createApart()
	{
		$session = session();
		
		if ($session->get('correo') != "" || $session->get('correo') != null) {
			echo view('layouts/header');
			echo view('apartamentoregis_view');
			echo view('layouts/footer');
		} else {
			echo "no tiene permisos para acceder";
		}
	}

	public function addApartamento()
	{
		$request = \Config\Services::request();
		$ApartModelo = new ApartModelo();
		$session = session();
		$id_usu = $session->get('id');
		$ciudad = $request->getPost('ciudad');
		$pais = $request->getPost('pais');
		$direccion = $request->getPost('direccion');
		$ubicacion = $request->getPost('ubicacion');
		$num_habitacion = $request->getPost('num_habitacion');
		$imagenes = $request->getPost('imagenes');
		$file = $request->getFile('imagen_destacada');
		$fotoname = $file->getRandomName();
		$path = "";
		if ($file->isValid() && !$file->hasMoved()) {
			$file->move('./uploads/images/', $fotoname);
			$path = base_url() . "/uploads/images/" . $fotoname;
		}
		//$imagen_destacada = $request->getPost('imagen_destacada');
		$valor = $request->getPost('valor');
		$resena = $request->getPost('resena');
		$ApartModelo->addApart($id_usu, $ciudad, $pais, $direccion, $ubicacion, $num_habitacion, $imagenes, $path, $valor, $resena);
		return redirect()->to('/apartamento');
		
	}

	public function deleteApartamento(){
		$ApartModelo = new ApartModelo();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$ApartModelo->deleteApart($id);
		return redirect()->to('/apartamento');
	}

	public function updateApartamento(){
		$ApartModelo = new ApartModelo();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$apartamento = $ApartModelo->getApart($id);
		
		echo view('layouts/header');
		echo view('update_apartview', array("apartamento" => $apartamento[0]));
		echo view('layouts/footer');
	}

	public function updateEditApartamento(){
		$ApartModelo = new ApartModelo();
		$request = \Config\Services::request();
		$ciudad = $request->getPost('ciudad');
		$pais = $request->getPost('pais');
		$direccion = $request->getPost('direccion');
		$ubicacion = $request->getPost('ubicacion');
		$num_habitacion = $request->getPost('num_habitacion');
		$imagenes = $request->getPost('imagenes');
		$file = $request->getFile('imagen_destacada');
		$fotoname = $file->getRandomName();
		$path = "";
		if ($file->isValid() && !$file->hasMoved()) {
			$file->move('./uploads/images/', $fotoname);
			$path = base_url() . "/uploads/images/" . $fotoname;
		}
		//$imagen_destacada = $request->getPost('imagen_destacada');
		$valor = $request->getPost('valor');
		$resena = $request->getPost('resena');
		$id = $request->getGet('id');
		$ApartModelo->updateApart($id, $ciudad, $pais, $direccion, $ubicacion, $num_habitacion, $imagenes, $path, $valor, $resena);
		return redirect()->to('/apartamento');
	}

}
