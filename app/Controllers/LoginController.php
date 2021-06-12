<?php

namespace App\Controllers;
use App\Models\HotelModelo;
use App\Models\ApartModelo;
class LoginController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('login_view');
		echo view('layouts/footer');
	}

	public function signIn(){
		$hotel = new HotelModelo();
		$apartamento = new ApartModelo();
		$request = \Config\Services::request();
		$correo = $request->getPost('correo');
		$session = session();
		$usuario= $hotel->readUsuarioemail($correo);
		if($usuario[0]['rol'] === 'Anfitrion'){
			$newdata = [
				'correo'  => $correo,
				'nombre'     => $usuario[0]['nombre'],
				'rol' => $usuario[0]['rol'],
				'id' => $usuario[0]['id'],
				'logged_in' => TRUE
			];
			$session->set($newdata);
			$id_usu=$session->get('id');
			$apartamentodata=$apartamento->readApartid($id_usu);
			$data= array (
				"apart" =>$apartamentodata,
			);
			echo view('layouts/header');
		    echo view('apartamento_real_view', $data);
		    echo view('layouts/footer');
		}else{
			$apartamentodata=$apartamento->readApart();
			$newdata = [
				'correo'  => $correo,
				'nombre'     => $usuario[0]['nombre'],
				'rol' => $usuario[0]['rol'],
				'id' => $usuario[0]['id'],
				'logged_in' => TRUE
			];
			$session->set($newdata);
			$data= array (
				"apart" =>$apartamentodata,
			);
			echo view('layouts/header');
		    echo view('apartamento_real_view', $data);
		    echo view('layouts/footer');
		}
		
	
	//print_r($usuario->rol) ;
	//return redirect()->to('registro/create');
	//echo $usuario->rol;
	}
}