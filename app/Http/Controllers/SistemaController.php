<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Illuminate\Auth\Events\Registered;

class SistemaController extends Controller
{
    public function index(){
        return view('sistema.index');
    }

    public function admin(){
        return view('sistema.admin');
    }

    public function adminList(){
        $empleados = Empleado::all();
        return view('sistema.adminList', compact('empleados'));
    }

    public function adminSearch(){
        return view('sistema.adminSearch');
    }

    public function book(){
        return view('sistema.book');
    }

    public function bookConfig(){
        return view('sistema.bookConfig');
    }

    public function bookInfo(){
        return view('sistema.bookInfo');
    }

    public function catalog(){
        return view('sistema.catalog');
    }

    public function category(){
        return view('sistema.category');
    }

    public function categoryList(){

        return view('sistema.categoryList');
    }

    public function client(){
        return view('sistema.client');
    }

    public function clientList(){
        $clientes = Cliente::all();
        return view('sistema.clientList', compact('clientes'));
    }

    public function clientSearch(){
        return view('sistema.clientSearch');
    }

    public function company(){
        return view('sistema.company');
    }

    public function company_create(Request $request){
        
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->user_password1),
            'perfil' => "Cliente",
        ]);
        event(new Registered($user));

        $clientes = new Cliente();
        $clientes->nombre = $request->cliente_nombre;
        $clientes->dni = $request->cliente_dni;
        $clientes->telefono = $request->cliente_telefono;
        $clientes->email = $request->cliente_email;
        $clientes->user_id = $user->id;
        $clientes->save();

        $empresas = new Empresa();
        $empresas->ruc = $request->empresa_ruc;
        $empresas->nombre = $request->empresa_nombre;
        $empresas->telefono = $request->empresa_telefono;
        $empresas->email = $request->empresa_email;
        $empresas->direccion = $request->empresa_direccion;
        $empresas->descripcion = $request->empresa_descripcion;
        $empresas->cliente_id = $clientes->id;
        $empresas->save();

        return redirect()->route('sistema.companyList');
    }

    public function companyList(){
        $empresas = Empresa::all();
        //$empresas = Empresa::paginate();
        return view('sistema.companyList', compact('empresas'));
    }

    public function home(){
        return view('sistema.home');
    }

    public function myAccount(){
        return view('sistema.myAccount');
    }

    public function myData(){
        $empleados = Empleado::all();
        return view('sistema.myData', compact('empleados'));
    }

    public function provider(){
        return view('sistema.provider');
    }

    public function providerList(){
        return view('sistema.providerList');
    }

    public function search(){
        return view('sistema.search');
    }
}
