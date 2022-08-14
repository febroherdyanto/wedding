<?php

namespace App\Controllers;
use App\Models\TamuModel;
use CodeIgniter\Config\View;

class Page extends BaseController
{
    public function index()
    {
        return view('guest');
    }

    public function Undangan($nickname){
        helper(['url']);
        $tamuModel = new TamuModel();
        $tamu = $tamuModel->where('nicknameGuest', $nickname)->first();
        
        $idGuest = $tamu['idGuest'];
        $sapaanGuest = $tamu['sapaanGuest'];
        $namaGuest = $tamu['namaGuest'];

        
        return view('undangan', compact('nickname', 'sapaanGuest', 'namaGuest', 'idGuest'));
    }
}
