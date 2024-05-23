<?php

class Letsbuild extends Controller{
    public function index()
    {
        $data['judul'] = 'Mari Build Pcmu';
        $data['komponen'] = $this->model('Komponen_model')->getAllKomponen();
        $this->view('templates/header', $data);
        $this->view('letsbuild/index', $data);
        $this->view('templates/footer');
    }
}