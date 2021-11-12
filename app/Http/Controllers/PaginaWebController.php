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
    function PaginaWebDirectorio()
    {
        return view('PaginaWeb.directorio');
    }
    public function FiltroGuias(Request $Request)
    {
        // mb_strtoupper($Request->id, 'UTF-8')
        $html = null;
        $html .= '<strong>FRANCISCO JAVIER QUINTERO GARCIA</strong>
        <h6>Presidente</h6>
        <a href="mailto:presidencia@confeguias.org">presidencia@confeguias.org</a>
        <hr>';

        return mb_strtoupper($Request->id, 'UTF-8');
    }
}
