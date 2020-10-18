<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Registro extends Component
{
    public function render()
    {
        return view('livewire.registro.registro');
    }

    //varibales para los campos para capturar los datos ingresados
    public $name;
    public $email;
    public $password;

    public function Ingresar(){

    	$validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required',
        ]);

        $insertUser = new User();
        $insertUser->name=$validatedData['name'];
        $insertUser->email=$validatedData['email'];
        $insertUser->password=$validatedData['password'];
        $insertUser->save();
        $this->vaciarCampos();
        return redirect(route('login'));
    }

    public function vaciarCampos(){
	    $this->name="";
	    $this->email="";
	    $this->password="";
    }
    

}
