<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;
    
    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];
        return view('list_kelas', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Kelas',
            'validation' => \Config\Services::validation()
        ];
        return view('create_kelas', $data);
    }

    public function store()
    {

        if (!$this->validate([
            'nama_kelas' => 'required'
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/kelas/create')->withInput();
        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);
        return redirect()->to('/kelas');
    }

    public function edit($id)
    {
        $kelas = $this->kelasModel->getKelas($id);
        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()

        ];
        return view('edit_kelas', $data);
    }

    public function update($id){
        
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];
        
        $result = $this->kelasModel->updateKelas($data, $id);
    
        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }
        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
    
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus dta');    
        }
        return redirect()->to(base_url('/kelas'))
       ->with('success', 'Berhasil menghapus data');
    }
}
