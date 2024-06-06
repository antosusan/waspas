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
    public function hitungNilai($id)
    {
        $dataRouter = $this->db->table('spk_router')->where('id', $id)->get()->getRow();
        // Hitung nilai berdasarkan harga
        $nilaiHarga = 0;
        if ($dataRouter->harga_router <= 2500000) {
            $nilaiHarga = 1;
        } else if ($dataRouter->harga_router <= 2000000) {
            $nilaiHarga = 2;
        } else if ($dataRouter->harga_router <= 1500000) {
            $nilaiHarga = 3;
        } else if ($dataRouter->harga_router <= 1000000) {
            $nilaiHarga = 4;
        } else {
            $nilaiHarga = 5;
        }

        // Hitung nilai berdasarkan freq_router
        $nilaiFreq = 0;
        switch ($dataRouter->freq_router) {
            case '650MHz':
                $nilaiFreq = 1;
                break;
            case '716MHz':
                $nilaiFreq = 2;
                break;
            case '800MHz':
                $nilaiFreq = 3;
                break;
            case '864MHz':
                $nilaiFreq = 4;
                break;
        }

        // Hitung nilai berdasarkan jml_port_router
        $nilaiPort = 0;
        switch ($dataRouter->jml_port_router) {
            case 2:
                $nilaiPort = 1;
                break;
            case 4:
                $nilaiPort = 2;
                break;
            case 5:
                $nilaiPort = 3;
                break;
            case 6:
                $nilaiPort = 4;
                break;
        }

        // Hitung nilai berdasarkan port_sfp_router
        $nilaiSfp = 0;
        if ($dataRouter->port_sfp_router == 'Tidak Ada') {
            $nilaiSfp = 1;
        } else {
            $nilaiSfp = 2;
        }

        // Hitung nilai berdasarkan wlan_tech_router
        $nilaiWlan = 0;
        switch ($dataRouter->wlan_tech_router) {
            case '802.11b/g/n':
                $nilaiWlan = 1;
                break;
            case '802.11a/n/ac':
                $nilaiWlan = 2;
                break;
            case '802.11b/g/n/ax':
                $nilaiWlan = 3;
                break;
        }

        // Hitung nilai berdasarkan jml_wlan_router
        $nilaiJmlWlan = 0;
        if ($dataRouter->jml_wlan_router == 1) {
            $nilaiJmlWlan = 1;
        } else {
            $nilaiJmlWlan = 2;
        }

        // Hitung nilai berdasarkan ram_router
        $nilaiRam = 0;
        switch ($dataRouter->ram_router) {
            case '32MB':
                $nilaiRam = 1;
                break;
            case '64MB':
                $nilaiRam = 2;
                break;
            case '128MB':
                $nilaiRam = 3;
                break;
            case '256MB':
                $nilaiRam = 4;
                break;
            case '1 GB':
                $nilaiRam = 5;
                break;
        }
        $dataNilai = [
            'no1' => $nilaiHarga,
            'no2' => $nilaiFreq,
            'no3' => $nilaiPort,
            'no4' => $nilaiSfp,
            'no5' => $nilaiWlan,
            'no6' => $nilaiJmlWlan,
            'no7' => $nilaiRam
        ];
        $this->db->table('spk_nilai_ori')->insert($dataNilai);
    }
}
