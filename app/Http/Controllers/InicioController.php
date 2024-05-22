<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    
    public function index(){
        return view('inicio.index');
    }

    public function nosotros(){
        return view('inicio.nosotros');
    }

    public function servicios(){
        return view('inicio.servicios');
    }

    public function asociados(){
        return view('inicio.asociados');
    }

    public function contacto(){
        return view('inicio.contacto');
    }

    public function email(){
        Mail::to('floresaldair164@gmail.com')
            ->send(new ContactanosMailable);

            return "Mensaje enviado";
    }
}
