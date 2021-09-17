<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaWebController extends Controller
{
    function PaginaWebIndex()
    {
        return view('PaginaWeb.index');
    }
    function PaginaWebContacto()
    {
        return view('PaginaWeb.contacto');
    }
    function PaginaWebNosotros()
    {
        return view('PaginaWeb.nosotros');
    }
    function PaginaWebGuias()
    {
        return view('PaginaWeb.guia');
    }
    function PaginaWebTerminos()
    {
        return view('PaginaWeb.terminos');
    }
    function PaginaWebPoliticas()
    {
        return view('PaginaWeb.politicas');
    }
    function PaginaWebBeneficios()
    {
        return view('PaginaWeb.beneficios');
    }
    function PaginaWebDenuncia()
    {
        return view('PaginaWeb.denuncia');
    }
}
