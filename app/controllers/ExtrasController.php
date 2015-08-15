<?php 
class ExtrasController extends BaseController{

	public function mas_extras(){
		return View::make("navegacion.mas");
	}

	public function pagos_credito(){
		return View::make("navegacion.modos_pago.pagos_credito");
	}

	public function pagos_debito(){
		return View::make("navegacion.modos_pago.pagos_debito");
	}
	
	public function pagos_transferencia(){
		return View::make("navegacion.modos_pago.pagos_transferencia");
	}

}