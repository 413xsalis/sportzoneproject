<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
    return view('admin.principal'); // Vista principal
}

public function reportes() {
    return view('Gestion_usuarios.principal'); // Nueva vista
}
}
