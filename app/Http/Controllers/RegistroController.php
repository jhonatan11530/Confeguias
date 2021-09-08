<?php

namespace App\Http\Controllers;

use App\Registro;
use App\Usuario;
use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $ruta_arch1 = $_FILES['AdjuntaDocumento']['tmp_name'];
        $nombre_arch1 = $_FILES['AdjuntaDocumento']['name'];
        $nueva_ruta1 = "file-registro/" . $nombre_arch1;

        $ruta_arch2 = $_FILES['AdjuntoTarjetaProfesional']['tmp_name'];
        $nombre_arch2 = $_FILES['AdjuntoTarjetaProfesional']['name'];
        $nueva_ruta2 = "file-registro/" . $nombre_arch2;

        $ruta_arch3 = $_FILES['DocumentoGuiaRegistro']['tmp_name'];
        $nombre_arch3 = $_FILES['DocumentoGuiaRegistro']['name'];
        $nueva_ruta3 = "file-registro/" . $nombre_arch3;

        $ruta_arch5 = $_FILES['CertificadosPDFIdiomas']['tmp_name'];
        $nombre_arch5 = $_FILES['CertificadosPDFIdiomas']['name'];
        $nueva_ruta5 = "file-registro/" . $nombre_arch5;
        Move_uploaded_file($ruta_arch5, $nueva_ruta5);

        $ruta_arch6 = $_FILES['CertificadosPDFAcademicos']['tmp_name'];
        $nombre_arch6 = $_FILES['CertificadosPDFAcademicos']['name'];
        $nueva_ruta6 = "file-registro/" . $nombre_arch6;
        Move_uploaded_file($ruta_arch6, $nueva_ruta6);

        $ruta_arch7 = $_FILES['CertificadosPDFEstudios']['tmp_name'];
        $nombre_arch7 = $_FILES['CertificadosPDFEstudios']['name'];
        $nueva_ruta7 = "file-registro/" . $nombre_arch7;
        Move_uploaded_file($ruta_arch7, $nueva_ruta7);

        Move_uploaded_file($ruta_arch, $nueva_ruta);
        Move_uploaded_file($ruta_arch1, $nueva_ruta1);
        Move_uploaded_file($ruta_arch2, $nueva_ruta2);
        Move_uploaded_file($ruta_arch3, $nueva_ruta3);

        if ($Guia == "SI") {
            $ruta_arch4 = $_FILES['CertificadoAsociacion']['tmp_name'];
            $nombre_arch4 = $_FILES['CertificadoAsociacion']['name'];
            $nueva_ruta4 = "file-registro/" . $nombre_arch4;
            Move_uploaded_file($ruta_arch4, $nueva_ruta4);
        }
        $create = date("Y-m-d H:i:s");



            if ($Guia == "SI") {

                $Registro = new Registro();
                $Registro->Nombre = $Nombre;
                $Registro->Apellido = $Apellido;
                $Registro->AdjuntarFoto = $nueva_ruta;
                $Registro->TipoIdentificacion = $TipoIdentificacion;
                $Registro->NumeroIdentificacion = $NumeroIdentificacion;
                $Registro->FechaExpedicion = $FechaExpedicion;
                $Registro->AdjuntaDocumento = $nueva_ruta1;
                $Registro->DirreccionResidencia = $DirreccionResidencia;
                $Registro->Nomenclatura = $Nomenclatura;
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
                $Registro->create_at = $create;
                $Registro->save();

                $user = new Usuario();
                $user->identificacion = $NumeroIdentificacion;
                $user->correo = $Correo;
                $user->password = $Contraseña;
                $user->create_at = $create;
                $user->save();

                // CERTIFICADOS DE IDIOMAS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosIdiomas;
                $Registro->categoria = 'Certificado de Idiomas';
                $Registro->documento = $nueva_ruta5;
                $Registro->created_at = $create;
                $Registro->save();

                // CERTIFICADOS DE ACADEMICOS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosAcademicos;
                $Registro->categoria = 'Certificado Academicos';
                $Registro->documento = $nueva_ruta6;
                $Registro->created_at = $create;
                $Registro->save();

                // CERTIFICADOS DE ESTUDIOS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosEstudios;
                $Registro->categoria = 'Certificado de Estudios';
                $Registro->documento = $nueva_ruta7;
                $Registro->created_at = $create;
                $Registro->save();
            } else {

                $Registro = new Registro();
                $Registro->Nombre = $Nombre;
                $Registro->Apellido = $Apellido;
                $Registro->AdjuntarFoto = $nueva_ruta;
                $Registro->TipoIdentificacion = $TipoIdentificacion;
                $Registro->NumeroIdentificacion = $NumeroIdentificacion;
                $Registro->FechaExpedicion = $FechaExpedicion;
                $Registro->AdjuntaDocumento = $nueva_ruta1;
                $Registro->DirreccionResidencia = $DirreccionResidencia;
                $Registro->Nomenclatura = $Nomenclatura;
                $Registro->Celular = $Celular;
                $Registro->TelefonoFijo = $TelefonoFijo;
                $Registro->TarjetaProfesional = $TarjetaProfesional;
                $Registro->AdjuntoTarjetaProfesional = $nueva_ruta2;
                $Registro->DescripcionPerfil = $DescripcionPerfil;
                $Registro->NGuiaRegistro = $NGuiaRegistro;
                $Registro->DocumentoGuiaRegistro = $nueva_ruta3;
                $Registro->Guia = $Guia;
                $Registro->create_at = $create;
                $Registro->save();

                $user = new Usuario();
                $user->identificacion = $NumeroIdentificacion;
                $user->correo = $Correo;
                $user->password = $Contraseña;
                $user->create_at = $create;
                $user->save();

                // CERTIFICADOS DE IDIOMAS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosIdiomas;
                $Registro->categoria = 'Certificado de Idiomas';
                $Registro->documento = $nueva_ruta5;
                $Registro->created_at = $create;
                $Registro->save();

                // CERTIFICADOS DE ACADEMICOS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosAcademicos;
                $Registro->categoria = 'Certificado Academicos';
                $Registro->documento = $nueva_ruta6;
                $Registro->created_at = $create;
                $Registro->save();

                // CERTIFICADOS DE ESTUDIOS
                $Registro = new Documentos();
                $Registro->usuario = $NumeroIdentificacion;
                $Registro->titulo = $TituloCertificadosEstudios;
                $Registro->categoria = 'Certificado de Estudios';
                $Registro->documento = $nueva_ruta7;
                $Registro->created_at = $create;
                $Registro->save();
            }

        return redirect('/')->with('success', 'Usted Se ha Registrado Correctamente !');
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
