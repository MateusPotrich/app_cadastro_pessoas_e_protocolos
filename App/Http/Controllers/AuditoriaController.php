<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    public function auditoria() {
        return view('site.auditoria');
    }
}
