<?php

namespace App\Controllers;

// use App\Models\PakarModel;
use App\Models\SpkPakar;

class PakarController extends BaseController
{
    public function index()
    {
        $pakarModel = new SpkPakar();
        $data['pakar'] = $pakarModel->findAll();
        return view('processdss', $data);
    }
}
