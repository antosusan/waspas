<?php

namespace App\Controllers;

use App\Models\SpkRouterModel;
use CodeIgniter\Controller;

class SpkRouterController extends Controller
{
    public function index()
    {
        $routerModel = new SpkRouterModel();
        $data['routers'] = $routerModel->getRouters();

        return view('router/index', $data);
    }
    public function create()
    {
        return view('crud_data/create');
    }
    public function store()
    {
        $model = new SpkRouterModel();
        $data = [
            'nama_router' => $this->request->getPost('nama_router'),
            'harga_router' => $this->request->getPost('harga_router'),
            'freq_router' => $this->request->getPost('freq_router'),
            'jml_port_router' => $this->request->getPost('jml_port_router'),
            'port_sfp_router' => $this->request->getPost('port_sfp_router'),
            'wlan_tech_router' => $this->request->getPost('wlan_tech_router'),
            'jml_wlan_router' => $this->request->getPost('jml_wlan_router'),
            'ram_router' => $this->request->getPost('ram_router'),
        ];

        if ($model->createRouter($data)) {
            return redirect()->to('data-criteria');
        } else {
            return view('crud_data/create');
        }
    }

    public function edit($id)
    {
        $routerModel = new SpkRouterModel();
        $data['router'] = $routerModel->find($id);

        return view('crud_data/edit', $data);
    }

    public function update($id)
    {
        // Pastikan validasi data input jika diperlukan

        $routerModel = new SpkRouterModel();

        $data = [
            'nama_router' => $this->request->getPost('nama_router'),
            'harga_router' => $this->request->getPost('harga_router'),
            'freq_router' => $this->request->getPost('freq_router'),
            'jml_port_router' => $this->request->getPost('jml_port_router'),
            'port_sfp_router' => $this->request->getPost('port_sfp_router'),
            'wlan_tech_router' => $this->request->getPost('wlan_tech_router'),
            'jml_wlan_router' => $this->request->getPost('jml_wlan_router'),
            'ram_router' => $this->request->getPost('ram_router'),
        ];

        if ($routerModel->update($id, $data)) {
            return redirect()->to('/data-criteria');
        } else {
            return view('crud_data/edit', ['error' => 'Failed to update router.']);
        }
    }

    public function delete($id)
    {
        $routerModel = new SpkRouterModel();
        $routerModel->deleteRouter($id);

        return redirect()->to('/data-criteria');
    }
}
