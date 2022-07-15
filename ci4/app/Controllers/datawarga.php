<?php

namespace App\Controllers;

use \App\Models\wargaModel;

class datawarga extends BaseController
{
    protected $wargaModel;
    public function __construct()
    {
        $this->wargaModel = new wargaModel();
    }
    public function index()
    {
        $warga = $this->wargaModel->findAll();


        $data = [
            'title' => 'Warga | RT04/RW02',
            'warga' => $warga
        ];
        return view('Warga/index', $data);
    }

    public function ubah($id)
    {
        echo $id;
    }

    public function create()
    {
        $data = [
            'title' => 'Form Data Warga'
        ];
        return view('Warga/create', $data);
    }

    public function save()
    {
        $this->wargaModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_rumah' => $this->request->getVar('No rumah'),
            'status' => $this->request->getVar('status'),
        ]);

        return redirect()->to('/datawarga');
    }
}
