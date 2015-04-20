<?php

class HomeController extends BaseController {

	public function index()
	{
		$total = Participante::count();
		$participantes = Participante::orderBy('created_at', 'desc')->get();
		if (Agent::isMobile())
			return View::make('index-mobile')->with('total', $total)->with('participantes', $participantes);
		else
			return View::make('index')->with('total', $total)->with('participantes', $participantes);
	}
	
	public function participa()
	{
		return View::make('participa-mobile');
	}
	
	public function reto()
	{
		return View::make('reto-mobile');
	}
	
	public function ajaxRegistro()
	{
		Session::regenerate();
		$sessionId = Session::getId();
		$messages = array(
			'required'		=> 'El campo :attribute es obligatorio.',
			'email'			=> 'Ingrese su cuenta de email.',
			'string'		=> 'El campo solo permite letras.',
			'digits'		=> 'El campo solo permite números.',
			'dni.unique'	=> 'El dni :value ya está registrado en nuestro sistema.',
			'email.unique'	=> 'El email :value ya está registrado en nuestro sistema.'
		);
		$rules = array(
			'nombre'	=> 'required',
			'dni'		=> 'required|digits:8|unique:participante',
			'email'		=> 'required|email|unique:participante',
			'celular'	=> 'required',
			'mensaje'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		if ($validator->fails()) {
			$messages = $validator->messages();
			$this->grabarError($sessionId, '', $messages);
			$respuesta = array('success' => 'error', 'messages' => $messages);
			return Response::json($respuesta, 200);
		} else {
			
			if (Input::hasFile('foto')) {
				$file = Input::file('foto');

				$mimeType = $file->getMimeType();
				if ($mimeType != 'image/jpeg' && $mimeType != 'image/png') {
					$this->grabarError($sessionId, '', 'Archivo no permitido.');
					$respuesta = array('success' => 'error', 'messages' => 'Archivo no permitido.');
					return Response::json($respuesta, 200);
				}

				$extension = $file->getClientOriginalExtension();
				$rutaOriginal = public_path() . '/uploads/original/';
				$rutaFinal = public_path() . '/uploads/final/';
				$archivo = $sessionId . '.' . $extension;
				$archivoOriginal = $rutaOriginal . $archivo;
				$archivoFinal = $rutaFinal . $archivo;
				$imagenOriginal = null;
				$imagenFinal = null;

				$file->move($rutaOriginal, $archivo);
				$imagenOriginal = Image::make($archivoOriginal);
				$width = $imagenOriginal->width();
				// AHORITA NO JOVEN
				// SE VA A REVISAR LA GALERIA PARA DESCARTAR LAS FOTOS, PEKES U OFENSIVAS
				/*if ($width < 800) {
					File::delete($archivoOriginal);
					$this->grabarError($sessionId, '', 'Archivo pequeño.');
					$respuesta = array('success' => 'error', 'messages' => 'Archivo pequeño.');
					return Response::json($respuesta, 200);
				}*/

				File::copy($archivoOriginal, $archivoFinal);
				$imagenFinal = Image::make($archivoFinal);
				$imagenFinal->widen(800)->save();

				$participante = new Participante();
				$participante->nombre		= ucwords(strtolower(trim(Input::get('nombre'))));
				$participante->dni			= Input::get('dni');
				$participante->email		= strtolower(Input::get('email'));
				$participante->celular		= Input::get('celular');
				$participante->mensaje		= ucfirst(strtolower(trim(Input::get('mensaje'))));
				$participante->imagen		= $sessionId;
				$participante->extension	= $extension;
				$participante->ip			= Request::getClientIp(true);

				$participante->save();
				
				$html = '<div class="contenedor-foto center-block ancho-l margen-l">'.
						'<img src="'.url().'/uploads/final/'.$participante->imagen.'.'.$participante->extension.'" alt="" class="img-responsive center-block"><div class="clearfix"></div><p>'.$participante->mensaje.'</p></div>';

				$respuesta = array('success' => 'ok', 'total' => $participante->count(), 'html' => $html);
				return Response::json($respuesta, 200);
			} else {
				$respuesta = array('success' => 'error', 'messages' => 'Error, no subió archivo.');
				$respuesta = array('success' => 'error', 'messages' => 'Error, no subió archivo.');
				return Response::json($respuesta, 200);
			}
		}
	}
	
	private function grabarError($sessionId, $extension, $mensaje)
	{
		$errores = new Errores();
		$errores->nombre		= Input::get('nombre');
		$errores->dni			= Input::get('dni');
		$errores->email			= Input::get('email');
		$errores->celular		= Input::get('celular');
		$errores->mensaje		= Input::get('mensaje');
		$errores->imagen		= $sessionId;
		$errores->extension		= $extension;
		$errores->ip			= Request::getClientIp(true);
		$errores->error			= print_r($mensaje, true);
		$errores->save();
	}
}
