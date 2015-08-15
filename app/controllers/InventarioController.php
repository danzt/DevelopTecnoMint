<?php
class InventarioController extends BaseController{

	
	public function home(){
		return View::make("inventario.home");
	}

	public function mostrar_catalogo(){
		return View::make("inventario.catalogo");
	}

	public function mostrar_categoria()
	{
		return View::make("navegacion.categoria");
	}
}
