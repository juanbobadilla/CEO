<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{
    public function render()
    {
        return view('livewire.login.login');
    }

    //varibales para los campos para capturar los datos ingresados
    public $email;
    public $password;

    public function Ingresar(){

    	$validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

    	Auth::attempt($validatedData);
    	return redirect(route('home'));
        
    }
}
