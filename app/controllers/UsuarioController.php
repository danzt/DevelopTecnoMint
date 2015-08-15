<?php 
class UsuarioController extends BaseController{
	
	public function registrar_usuario(){
		$nombre=Input::get("nombre");
		$apellido=Input::get("apellido");
		$correo=Input::get("correo");
		$telefono=Input::get("telefono");
			
		return View::make("inventario.informacion_procesada") ->with(array(
			"nombre"=>$nombre,
			"apellido"=>$apellido,
			"correo"=>$correo,
			"telefono"=>$telefono,
			));
	}

	public function mostrar_perfil(){
		return View::make("navegacion.perfil");
	}
}