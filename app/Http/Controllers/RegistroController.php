<?php

namespace App\Http\Controllers;

use App\Registro;
use App\Usuario;
use App\Documentos;
use App\Mail\RegistroReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Departamento = DB::select("SELECT DISTINCT departamento FROM ciudades ORDER BY departamento ASC");
        return view('formulario.index')->with('Departamento', $Departamento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        extract($_POST);

        $ruta_arch = $_FILES['AdjuntarFoto']['tmp_name'];
        $nombre_arch = $_FILES['AdjuntarFoto']['name'];
        $nueva_ruta = "file-registro/" . $nombre_arch;

        $ruta_arch2 = $_FILES['AdjuntoTarjetaProfesional']['tmp_name'];
        $nombre_arch2 = $_FILES['AdjuntoTarjetaProfesional']['name'];
        $nueva_ruta2 = "file-registro/" . $nombre_arch2;

        $ruta_arch3 = $_FILES['DocumentoGuiaRegistro']['tmp_name'];
        $nombre_arch3 = $_FILES['DocumentoGuiaRegistro']['name'];
        $nueva_ruta3 = "file-registro/" . $nombre_arch3;

        Move_uploaded_file($ruta_arch, $nueva_ruta);
        Move_uploaded_file($ruta_arch2, $nueva_ruta2);
        Move_uploaded_file($ruta_arch3, $nueva_ruta3);

        if ($Guia == "SI") {
            $ruta_arch4 = $_FILES['CertificadoAsociacion']['tmp_name'];
            $nombre_arch4 = $_FILES['CertificadoAsociacion']['name'];
            $nueva_ruta4 = "file-registro/" . $nombre_arch4;
            Move_uploaded_file($ruta_arch4, $nueva_ruta4);
        }
        if ($Guia == "SI") {

            $Registro = new Registro();
            $Registro->Nombre = $Nombre;
            $Registro->Apellido = $Apellido;
            $Registro->AdjuntarFoto = $nueva_ruta;
            $Registro->TipoIdentificacion = $TipoIdentificacion;
            $Registro->NumeroIdentificacion = $NumeroIdentificacion;
            $Registro->FechaExpedicion = $FechaExpedicion;
            $Registro->DirreccionResidencia = $DirreccionResidencia;
            $Registro->Departamento = $departamento;
            $Registro->Ciudad = $ciudad;
            $Registro->Celular = $Celular;
            $Registro->TelefonoFijo = $TelefonoFijo;
            $Registro->TarjetaProfesional = $TarjetaProfesional;
            $Registro->AdjuntoTarjetaProfesional = $nueva_ruta2;
            $Registro->DescripcionPerfil = $DescripcionPerfil;
            $Registro->NGuiaRegistro = $NGuiaRegistro;
            $Registro->DocumentoGuiaRegistro = $nueva_ruta3;
            $Registro->Guia = $Guia;
            $Registro->NombreAsociacion = $NombreAsociacion;
            $Registro->CertificadoAsociacion = $nueva_ruta4;
            $Registro->Terminos = $AceptarTerminos;
            $Registro->save();
/*
            $registros = new Correos();
            $registros->Mail($Nombre, $Apellido, $Correo, $Contraseña);
*/
            $user = new Usuario();
            $user->identificacion = $NumeroIdentificacion;
            $user->correo = $Correo;
            $user->password = bcrypt($Contraseña);
            $user->save();

            foreach ($_FILES['CertificadosPDFIdiomas']['name'] as $key => $value) {
                if ($TituloCertificadosIdiomas[$key]) {
                    $ruta_arch5[$key] = $_FILES['CertificadosPDFIdiomas']['tmp_name'][$key];
                    $nombre_arch5[$key] = $_FILES['CertificadosPDFIdiomas']['name'][$key];
                    $nueva_ruta5[$key] = "file-registro/" . $nombre_arch5[$key];
                    Move_uploaded_file($ruta_arch5[$key], $nueva_ruta5[$key]);

                    // CERTIFICADOS DE IDIOMAS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosIdiomas[$key];
                    $Registro->categoria = 'Certificado de Idiomas';
                    $Registro->documento = $nueva_ruta5[$key];
                    $Registro->save();
                }
            }

            foreach ($_FILES['CertificadosPDFAcademicos']['name'] as $key => $value) {
                if ($TituloCertificadosAcademicos[$key]) {
                    $ruta_arch6[$key] = $_FILES['CertificadosPDFAcademicos']['tmp_name'][$key];
                    $nombre_arch6[$key] = $_FILES['CertificadosPDFAcademicos']['name'][$key];
                    $nueva_ruta6[$key] = "file-registro/" . $nombre_arch6[$key];
                    Move_uploaded_file($ruta_arch6[$key], $nueva_ruta6[$key]);

                    // CERTIFICADOS DE ACADEMICOS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosAcademicos[$key];
                    $Registro->categoria = 'Certificado Academicos';
                    $Registro->documento = $nueva_ruta6[$key];
                    $Registro->save();
                }
            }

            foreach ($_FILES['CertificadosPDFEstudios']['name'] as $key => $value) {
                if ($TituloCertificadosEstudios[$key]) {
                    $ruta_arch7[$key] = $_FILES['CertificadosPDFEstudios']['tmp_name'][$key];
                    $nombre_arch7[$key] = $_FILES['CertificadosPDFEstudios']['name'][$key];
                    $nueva_ruta7[$key] = "file-registro/" . $nombre_arch7[$key];
                    Move_uploaded_file($ruta_arch7[$key], $nueva_ruta7[$key]);

                    // CERTIFICADOS DE ESTUDIOS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosEstudios[$key];
                    $Registro->categoria = 'Certificado de Estudios';
                    $Registro->documento = $nueva_ruta7[$key];
                    $Registro->save();
                }
            }
        } else {

            $Registro = new Registro();
            $Registro->Nombre = $Nombre;
            $Registro->Apellido = $Apellido;
            $Registro->AdjuntarFoto = $nueva_ruta;
            $Registro->TipoIdentificacion = $TipoIdentificacion;
            $Registro->NumeroIdentificacion = $NumeroIdentificacion;
            $Registro->FechaExpedicion = $FechaExpedicion;
            $Registro->DirreccionResidencia = $DirreccionResidencia;
            $Registro->Departamento = $departamento;
            $Registro->Ciudad = $ciudad;
            $Registro->Celular = $Celular;
            $Registro->TelefonoFijo = $TelefonoFijo;
            $Registro->TarjetaProfesional = $TarjetaProfesional;
            $Registro->AdjuntoTarjetaProfesional = $nueva_ruta2;
            $Registro->DescripcionPerfil = $DescripcionPerfil;
            $Registro->NGuiaRegistro = $NGuiaRegistro;
            $Registro->DocumentoGuiaRegistro = $nueva_ruta3;
            $Registro->Guia = $Guia;
            $Registro->Terminos = $AceptarTerminos;
            $Registro->save();

            $user = new Usuario();
            $user->identificacion = $NumeroIdentificacion;
            $user->correo = $Correo;
            $user->password = bcrypt($Contraseña);
            $user->save();
/*
            $mensaje = ['Nombre' => $Nombre, 'Apellido' => $Apellido, 'Correo' => $Correo, 'Contraseña' => $Contraseña];
            
            $registros = new Correos();
            $registros->Mail($mensaje);
*/
            foreach ($_FILES['CertificadosPDFIdiomas']['name'] as $key => $value) {
                if ($TituloCertificadosIdiomas[$key]) {
                    $ruta_arch5[$key] = $_FILES['CertificadosPDFIdiomas']['tmp_name'][$key];
                    $nombre_arch5[$key] = $_FILES['CertificadosPDFIdiomas']['name'][$key];
                    $nueva_ruta5[$key] = "file-registro/" . $nombre_arch5[$key];
                    Move_uploaded_file($ruta_arch5[$key], $nueva_ruta5[$key]);

                    // CERTIFICADOS DE IDIOMAS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosIdiomas[$key];
                    $Registro->categoria = 'Certificado de Idiomas';
                    $Registro->documento = $nueva_ruta5[$key];
                    $Registro->save();
                }
            }

            foreach ($_FILES['CertificadosPDFAcademicos']['name'] as $key => $value) {
                if ($TituloCertificadosAcademicos[$key]) {
                    $ruta_arch6[$key] = $_FILES['CertificadosPDFAcademicos']['tmp_name'][$key];
                    $nombre_arch6[$key] = $_FILES['CertificadosPDFAcademicos']['name'][$key];
                    $nueva_ruta6[$key] = "file-registro/" . $nombre_arch6[$key];
                    Move_uploaded_file($ruta_arch6[$key], $nueva_ruta6[$key]);

                    // CERTIFICADOS DE ACADEMICOS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosAcademicos[$key];
                    $Registro->categoria = 'Certificado Academicos';
                    $Registro->documento = $nueva_ruta6[$key];
                    $Registro->save();
                }
            }

            foreach ($_FILES['CertificadosPDFEstudios']['name'] as $key => $value) {
                if ($TituloCertificadosEstudios[$key]) {
                    $ruta_arch7[$key] = $_FILES['CertificadosPDFEstudios']['tmp_name'][$key];
                    $nombre_arch7[$key] = $_FILES['CertificadosPDFEstudios']['name'][$key];
                    $nueva_ruta7[$key] = "file-registro/" . $nombre_arch7[$key];
                    Move_uploaded_file($ruta_arch7[$key], $nueva_ruta7[$key]);

                    // CERTIFICADOS DE ESTUDIOS
                    $Registro = new Documentos();
                    $Registro->usuario = $NumeroIdentificacion;
                    $Registro->titulo = $TituloCertificadosEstudios[$key];
                    $Registro->categoria = 'Certificado de Estudios';
                    $Registro->documento = $nueva_ruta7[$key];
                    $Registro->save();
                }
            }
        }
        return 1;
    }

    public function filtrar(Request $request)
    {
        $request->ciudad;
        $html = null;
        $ciudad = DB::select("SELECT ciudad FROM ciudades WHERE departamento='$request->departamento' ORDER BY ciudad ASC");
        foreach ($ciudad as $key => $value) {
            $selected = ($value->ciudad == $request->ciudad) ? 'selected="selected"' : '';
            $html .= '<option value="' . $value->ciudad . '"  ' . $selected . '>' . $value->ciudad . '</option>';
        }
        return $html;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
class Correos
{
    function Mail($mensaje)
    {
        Mail::to($mensaje['Correo'])->send(new RegistroReceived($mensaje));
    }
}
