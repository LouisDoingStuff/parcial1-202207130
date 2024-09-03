<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\IntegrantesModel;

class Integrantes extends BaseController{

    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM integrantes");
        $data=['integrante'=>$query->getResult()];
        return view('integrantes/index', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoIntegrante():string
    {
        return view('integrantes/form_nuevo_IG');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarIntegrante(){
        $integrantes = new IntegrantesModel();
        $datos = [
            'integrante_id' => $this->request->getPost('integrante_id'),
            'nombre'=> $this->request->getPost('nombre'),
            'apellido'=> $this->request->getPost('apellido'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'fecha_muerte'=> $this->request->getPost('fecha_muerte'),
            'web_oficial'=> $this->request->getPost('web_oficial'),
            'pais_nacimiento'=> $this->request->getPost('pais_nacimiento')
            
        ];
        print_r($datos);
        $integrantes->insert($datos);
        return redirect()->route('ver_ig');
    }

           /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarIntegrante($integrante_id = null){
        $integrantes = new IntegrantesModel();
        $integrantes ->delete(['integrante_id'=>$integrante_id]);
        return redirect()->route('ver_ig');
    }

     /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarIntegrante($integrante_id = null)
    {
        $integrantes = new IntegrantesModel();
        $datos['datos']=$integrantes->where(['integrante_id'=>$integrante_id])->first();
        return view('integrantes/form_modificar_IG',$datos);
    }

        /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarIntegrante(){
        $integrantes = new IntegrantesModel();

        $datos=[
            'integrante_id' => $this->request->getPost('integrante_id'),
            'nombre'=> $this->request->getPost('nombre'),
            'apellido'=> $this->request->getPost('apellido'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'fecha_muerte'=> $this->request->getPost('fecha_muerte'),
            'web_oficial'=> $this->request->getPost('web_oficial'),
            'pais_nacimiento'=> $this->request->getPost('pais_nacimiento')
        ];
        $integrantes->update($datos['integrante_id'],$datos);
        return redirect()->route('ver_ig');
    }
}