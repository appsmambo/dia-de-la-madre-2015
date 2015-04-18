<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function ajaxRegistro()
	{
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
			$respuesta = array('success' => 'error', 'messages' => $messages);
			return Response::json($respuesta, 200);
		} else {
			Session::regenerate();
			$sessionId = Session::getId();
			
			if (Input::hasFile('foto')) {
				$file = Input::file('foto');

				$mimeType = $file->getMimeType();
				if ($mimeType != 'image/jpeg' && $mimeType != 'image/png') {
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
				if ($width < 800) {
					File::delete($archivoOriginal);
					$respuesta = array('success' => 'error', 'messages' => 'Archivo pequeño.');
					return Response::json($respuesta, 200);
				}

				File::copy($archivoOriginal, $archivoFinal);
				$imagenFinal = Image::make($archivoFinal);
				$imagenFinal->widen(800)->save();

				$participante = new Participante();
				$participante->nombre	= ucwords(strtolower(trim(Input::get('nombre'))));
				$participante->dni		= Input::get('dni');
				$participante->email	= strtolower(Input::get('email'));
				$participante->celular	= Input::get('celular');
				$participante->mensaje	= Input::get('mensaje');
				$participante->s_id		= $sessionId;
				$participante->ip		= Request::getClientIp(true);

				$participante->save();

				$respuesta = array('success' => 'ok', 'total' => $participante->count());
				return Response::json($respuesta, 200);
			} else {
				$respuesta = array('success' => 'error', 'messages' => 'Error con el archivo.');
				return Response::json($respuesta, 200);
			}
		}
	}
}
