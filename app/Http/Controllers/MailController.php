<?php

namespace App\Http\Controllers;

use Mail;
use App\Denuncia;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use App\Mail\DenunciaReceived;

class MailController extends Controller
{
    public function MailContacto(Request $request)
    {

        $mensaje = request()->validate([
            'Nombre' => 'required',
            'Correo' => 'required',
            'Telefono' => 'required',
            'Asunto' => 'required',
            'Mensaje' => 'required'
        ]);
        Mail::to('correo@dominio.com')->send(new MessageReceived($mensaje));

        return redirect('contacto');
    }
    public function MailDenuncia()
    {
        extract($_POST);
        $Datos = NULL;

        $mensaje= array('NombreDenunciante'=>$NombreDenunciante,'TipoDocumento'=>$TipoDocumento,'NumeroDocumento'=>$NumeroDocumento
        ,'NTarjetaProfesional'=>$NTarjetaProfesional,'Correo'=>$Correo,'Telefono'=>$Telefono,'TituloQueja'=>$TituloQueja
        ,'DescripcionQueja'=>$DescripcionQueja);

/*
         $mensaje= request()->validate([
            'NombreDenunciante'=>'required',
            'TipoDocumento'=>'required',
            'NumeroDocumento'=>'required',
            'NTarjetaProfesional'=>'required',
            'Correo'=>'required',
            'Telefono'=>'required',
            'TituloQueja'=>'required',
            'DescripcionQueja'=>'required',
            'PoseePrueba'=>'',
            'DescripcionHechos'=>'',
            'AdjuntarPruebas'=>'nullable|max:2000|mimes:jpeg,png,doc,docs,pdf',
            ]);
*/

        if ($PoseePrueba == "SI") {

            $count = count($_FILES['AdjuntarPruebas']['name']);
            for ($i = 0; $i < $count; $i++) {
                $ruta_arch = $_FILES['AdjuntarPruebas']['tmp_name'][$i];
                $nombre_arch = $_FILES['AdjuntarPruebas']['name'][$i];
                $nueva_ruta = "file-denuncia/" . $nombre_arch;
                $Datos .= $nueva_ruta . '%_/-\_%';
                Move_uploaded_file($ruta_arch, $nueva_ruta);
            }

            $denuncia = new Denuncia();
            $denuncia->NombreDenunciante = $NombreDenunciante;
            $denuncia->TipoDocumento = $TipoDocumento;
            $denuncia->NumeroDocumento = $NumeroDocumento;
            $denuncia->NTarjetaProfesional = $NTarjetaProfesional;
            $denuncia->Correo = $Correo;
            $denuncia->Telefono = $Telefono;
            $denuncia->TituloQueja = $TituloQueja;
            $denuncia->DescripcionQueja = $DescripcionQueja;
            $denuncia->PoseePrueba = $PoseePrueba;
            $denuncia->DescripcionHechos = $DescripcionHechos;
            $denuncia->AdjuntarPruebas = $Datos;
            $denuncia->save();

            Mail::to('correo@dominio.com')->send(new DenunciaReceived($mensaje));
            
            return 1;
            
        } else {
            $denuncia = new Denuncia();
            $denuncia->NombreDenunciante = $NombreDenunciante;
            $denuncia->TipoDocumento = $TipoDocumento;
            $denuncia->NumeroDocumento = $NumeroDocumento;
            $denuncia->NTarjetaProfesional = $NTarjetaProfesional;
            $denuncia->Correo = $Correo;
            $denuncia->Telefono = $Telefono;
            $denuncia->TituloQueja = $TituloQueja;
            $denuncia->DescripcionQueja = $DescripcionQueja;
            $denuncia->PoseePrueba = $PoseePrueba;
            $denuncia->save();

            Mail::to('correo@dominio.com')->send(new DenunciaReceived($mensaje));

            return 1;
            
        }
    }
}
