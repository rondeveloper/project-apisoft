<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index()
    {
        $clientesModel = new ClientesModel();
        
        return view('clientes/listar', ['clientes' => $clientesModel->findAll()]);
    }
    
    public function crear()
    {
        $clientesModel = new ClientesModel();

        helper('form');

        if ($this->request->getMethod() === 'post') {
            if ($clientesModel->save($this->request->getPost())) {
                return redirect()->to('/clientes')->with('messages', 'Se creo el Cliente');
            }
        }

        return view('clientes/crear', ['validation' => $clientesModel->getValidation()]);
    }

    public function editar(int $id)
    {
        helper('form');

        $clientesModel = new ClientesModel();

        $entity = $clientesModel->find($id);

        if (!$entity) {
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->request->getMethod() === 'post') {
            if ($clientesModel->update($entity['id'], $this->request->getPost())) {
                return redirect()->to('/clientes')->with('messages', 'El Cliente se modifico!');
            }
        }

        return view('clientes/editar', [
            'validation' => $clientesModel->getValidation(),
            'entity' => $entity
        ]);
    }
    
    public function eliminar(int $id)
    {
        $clientesModel = new ClientesModel();

        $entity = $clientesModel->find($id);

        if (!$entity) {
            throw PageNotFoundException::forPageNotFound();
        }

        $clientesModel->delete($id);
        
        return redirect()->to('/clientes');
    }

}
