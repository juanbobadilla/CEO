<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tercero extends Component
{
    public function render()
    {
        return view('livewire.suscripciones.tercero');
    }


    public $nombresApellidos;
    public $tipoIdentificacion;
    public $identificacion;
    public $fechaNacimiento;

    

    public function add(){

    	$validatedData = $this->validate([
            'nombresApellidos' => 'required',
            'tipoIdentificacion' => 'required',
            'identificacion' => 'required',
            'fechaNacimiento' => 'required',
        ]);
        
        
    }



   
}
