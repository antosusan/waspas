<?php

namespace App\Controllers;

use App\Models\SpkRouterModel;
use App\Models\SpkPakar;


class DashboardController extends BaseController
{

    public function index()
    {
        return view('dashboard');
    }
    public function dashboard1()
    {
        return view('dashboard1');
    }
    public function dataCriteria()
    {
        $spkRouterModel = new SpkRouterModel();
        $data['routers'] = $spkRouterModel->findAll();
        return view('dataCriteria', $data);
    }
    public function processDss()
    {
        $pakarModel = new SpkPakar();
        $data['pakar'] = $pakarModel->findAll();
        return view('processDss', $data);
        $spkRouterModel = new SpkRouterModel();
        $data['routers'] = $spkRouterModel->hitungNilai();
    }
    public function output()
    {
        return view('output');
    }
    public function form()
    {
        return view('form');
    }
}
