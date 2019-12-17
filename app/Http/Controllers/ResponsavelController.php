<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsavel;

class ResponsavelController extends Controller
{
    //
    public function index()
    {
        $dados = Responsavel::all();
        return $dados;
    }
}
