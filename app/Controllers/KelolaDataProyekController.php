<?php

namespace App\Controllers;
use App\Models\ProyekModel;

class KelolaDataProyekController extends BaseController
{
    public function index()
    {
        $proyekModel = new ProyekModel();
        $data['proyek'] = $proyekModel->getAll();
        return view('KelolaDataProyek/HomeKelolaDataProyek', $data);
    }

    public function editView($id)
    {
        $proyekModel = new ProyekModel();
        $data['proyek'] = $proyekModel->find($id);
        return view('KelolaDataProyek/EditKelolaDataProyek', $data);
    }

    public function editProyek($id)
    {
        helper(['form']);
        $rules = [
            'nama_proyek'          => 'required',
            'document_title'          => 'required',
            'kategori_document'         => 'required',
            'deparment'      => 'required',
            'tipe'  => 'required',
            'industri'  => 'required'
        ];
        $password = $this->request->getVar('confirmpassword');
        if($this->validate($rules)){
            $data = [
                'nama_proyek'     => $this->request->getVar('nama_proyek'),
                'document_title'     => $this->request->getVar('document_title'),
                'kategori_document'    => $this->request->getVar('kategori_document'),
                'deparment'    => $this->request->getVar('deparment'),
                'tipe'    => $this->request->getVar('tipe'),
                'industri'    => $this->request->getVar('industri'),
            ];
            $proyekModel = new ProyekModel();
            $proyekModel->updateProyek($id, $data);
            session()->setFlashdata('success', 'Proyek berhasil diupdate.');
            return redirect()->to('kelola-data-proyek');
        }else{
            $data['validation'] = $this->validator;
            $proyekModel = new ProyekModel();
            $data['proyek'] = $proyekModel->find($id);
            echo view('KelolaDataProyek/EditKelolaDataProyek', $data);
        }
    }

    public function deleteProyek($id)
    {
        $proyekModel = new ProyekModel();
        $proyek = $proyekModel->find($id);
        $proyekModel->deleteProyek($id);
        session()->setFlashdata('success', 'Proyek berhasil dihapus.');
        return redirect()->to(base_url('kelola-data-proyek'));
    }
}
