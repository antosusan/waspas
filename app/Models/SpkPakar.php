<?php

namespace App\Models;

use CodeIgniter\Model;

class SpkPakar extends Model
{

    protected $table = 'spk_pakar';
    protected $primaryKey = 'id_pakar';
    protected $allowedFields = ['nama', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7'];
}
