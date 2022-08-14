<?php

namespace App\Controllers;
use App\Models\TamuModel;
use App\Models\KehadiranModel;
use App\Models\DoaModel;
use CodeIgniter\Config\View;

class Main extends BaseController
{
    public function Invitation($nick){
        helper(['url']);
        $tamuModel = new TamuModel();
        $tamu = $tamuModel->where('nicknameGuest', $nick)->first();
        
        $idGuest = $tamu['idGuest'];
        $sapaanGuest = $tamu['sapaanGuest'];
        $namaGuest = $tamu['namaGuest'];

        
        return view('maininvitation', compact('nick', 'sapaanGuest', 'namaGuest', 'idGuest'));
        
    }

    public function SaveKehadiran(){
        $db = db_connect();
        $this->KehadiranModel = new KehadiranModel($db);
        $nicknameGuest = $this->request->getVar('nicknameGuest');

        $data = [
            'idGuest' => $this->request->getVar('idGuest'),
            'statusKehadiran' => $this->request->getVar('statusKehadiran'),
            'pesan' => $this->request->getVar('pesan')
        ];
        $this->KehadiranModel->add($data);
        return redirect()->to('/'.$nicknameGuest.'/main');
    }

    public function SaveDoa(){
        $db = db_connect();
        $this->DoaModel = new DoaModel($db);
        $nicknameGuest = $this->request->getVar('nicknameGuest');

        $data = [
            'waktu' => $this->request->getVar('waktu'),
            'ipaddress' => $this->request->getVar('ipaddress'),
            'pengirimDoa' => $this->request->getVar('pengirimDoa'),
            'ucapanDoa' => $this->request->getVar('ucapanDoa')
        ];
        $this->DoaModel->add($data);
        return redirect()->to('/'.$nicknameGuest.'/main');
    }

    function doa_list(){
        $db = db_connect();
        $this->DoaModel = new DoaModel($db);
        return view('doa_list');
    }
}
