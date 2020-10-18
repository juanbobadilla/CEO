<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.logout.logout');
    }

    //funcion para salir del login
    public function logout(){

    	Auth::logout();
    	return redirect(route('login'));
    }

}
