<?php

namespace App\Controllers;
use App\Models\RevisionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;

use App\Controllers\BaseController;

class Revisiones extends BaseController
{
    public function index()
    {
            $revisionesModel = new RevisionesModel();
            
            return view('revisiones/listar', ['revisiones' => $revisionesModel->findAll()]);
        
    }
    
    public function crear()
    {
        $revisionesModel = new RevisionesModel();

        helper('form');

        if ($this->request->getMethod() === 'post') {
            if ($revisionesModel->save($this->request->getPost())) {
                return redirect()->to('/revisiones')->with('messages', 'Se realizo una revision');
            }
        }

        return view('revisiones/crear', ['validation' => $revisionesModel->getValidation()]);
    }

    public function editar(int $id)
    {
        helper('form');
        
        $revisionesModel = new RevisionesModel();

        $entity = $revisionesModel->find($id);

        if (!$entity) {
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->request->getMethod() === 'post') {
            if ($revisionesModel->update($entity['id'], $this->request->getPost())) {
                return redirect()->to('/revisiones')->with('messages', 'La revision se modifico!');
            }
        }

        return view('revisiones/editar', [
            'validation' => $revisionesModel->getValidation(),
            'entity' => $entity
        ]);
    }
    
    public function eliminar(int $id)
    {
        $revisionesModel = new RevisionesModel();

        $entity = $revisionesModel->find($id);

        if (!$entity) {
            throw PageNotFoundException::forPageNotFound();
        }

        $revisionesModel->delete($id);
        
        return redirect()->to('/revisiones');
    }

}
