<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
	// Esto es un comentario
	public function index(Request $request) {
		return ("Dentro de Index");
    }

	public function get(int $id) {
		return dd($id);
	}
}
