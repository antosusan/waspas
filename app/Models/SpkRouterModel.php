<?php

namespace App\Models;

use CodeIgniter\Model;

class SpkRouterModel extends Model
{
    protected $table = 'spk_router';
    protected $primaryKey = 'id_router';
    protected $allowedFields = ['nama_router', 'harga_router', 'freq_router', 'jml_port_router', 'port_sfp_router', 'wlan_tech_router', 'jml_wlan_router', 'ram_router'];

    public function getRouters()
    {
        return $this->findAll();
    }

    public function getRouter($id)
    {
        return $this->find($id);
    }

    public function createRouter($data)
    {
        return $this->insert($data);
    }

    public function updateRouter($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteRouter($id)
    {
        return $this->delete($id);
    }
    public function insertRouter($data)
    {
        return $this->insert($data);
    }
}
