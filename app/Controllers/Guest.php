<?php

namespace App\Controllers;
use App\Models\KehadiranModel;
use App\Models\DoaModel;
use CodeIgniter\Config\View;

class Guest extends BaseController
{
    public function GuestInvitation(){
        helper(['url']);        
        return view('guestinv');
    }

    public function GuestDoa(){
        $db = db_connect();
        $this->DoaModel = new DoaModel($db);

        $data = [
            'waktu' => $this->request->getVar('waktu'),
            'ipaddress' => $this->request->getVar('ipaddress'),
            'pengirimDoa' => $this->request->getVar('pengirimDoa'),
            'ucapanDoa' => $this->request->getVar('ucapanDoa')
        ];
        $this->DoaModel->add($data);
        return redirect()->to('/guest');
    }

    function doa_list(){
        $db = db_connect();
        $this->DoaModel = new DoaModel($db);
        return view('doa_list');
    }
}
