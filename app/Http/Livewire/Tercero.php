<?php

namespace App\Http\Livewire;

use Livewire\Component;
//use App\Http\Requests\terceroRequest;
use App\SuscripcionTercero;
use Illuminate\Support\Facades\DB;

class Tercero extends Component
{
    public function render()
    {
        return view('livewire.suscripciones.tercero');
    }

    //varibales para los campos para capturar los datos ingresados
    public $tipoIdentificacion;
    public $identificacion;
    public $dev=0;
    public $nombresApellidos;
    public $fechaNacimiento;
    public $profesion;
    public $tipoOrganizacion;
    public $personeriaTributaria;
    public $regimenTributario;
    public $cargo;
    public $direccion;
    public $telefono;
    public $movil;
    public $correo;

    //función agregar clientes terceros validada
    public function AgregarTercero(){
        //se valida los campos para que sean requeridos
    	$validatedData = $this->validate([
            'tipoIdentificacion' => 'required',
            'identificacion' => 'required|unique:clientetercero',
            //'dev' => 'required',
            'nombresApellidos' => 'required',
            'fechaNacimiento' => 'required',
            'profesion'=> 'required',
            'tipoOrganizacion'=> 'required',
            'personeriaTributaria'=> 'required',
            'regimenTributario'=> 'required',
            'cargo'=> 'required',
            'direccion'=> 'required|unique:clientetercero',
            'telefono'=> 'required',
            'movil'=> 'required',
            'correo'=> 'required|email|unique:clientetercero',
        ]);
        //se hace instancia del modelo de terceros para agregar los datos
        $tercero = new SuscripcionTercero();
        //se fomatea la fecha ingresada
        $newDate = date("d/m/Y", strtotime($validatedData['fechaNacimiento']));

        $tercero->tipoIdentificacion = $validatedData['tipoIdentificacion'];
        $tercero->identificacion = $validatedData['identificacion'];
        $tercero->dev = $this->dev;
        $tercero->nombresApellidos = $validatedData['nombresApellidos'];
        $tercero->fechaNacimiento = $newDate;
        $tercero->profesion = $validatedData['profesion'];
        $tercero->tipoOrganizacion = $validatedData['tipoOrganizacion'];
        $tercero->personeriaTributaria = $validatedData['personeriaTributaria'];
        $tercero->regimenTributario = $validatedData['regimenTributario'];
        $tercero->cargo = $validatedData['cargo'];
        $tercero->direccion = $validatedData['direccion'];
        $tercero->telefono = $validatedData['telefono'];
        $tercero->movil = $validatedData['movil'];
        $tercero->correo = $validatedData['correo'];
        //se guarda los campos
        $tercero->save();
        //se limpia los campos
        $this->limpiarCampos();

        session()->flash('message', 'Clientes ingresados correctamente');
        
    }

    //se crea una funcion para limpiar los campos
    public function limpiarCampos(){
        $this->tipoIdentificacion="";
        $this->identificacion="";
        $this->dev=0;
        $this->nombresApellidos="";
        $this->fechaNacimiento="";
        $this->profesion="";
        $this->tipoOrganizacion="";
        $this->personeriaTributaria="";
        $this->regimenTributario="";
        $this->cargo="";
        $this->direccion="";
        $this->telefono="";
        $this->movil="";
        $this->correo="";
    }
   
   //metodo buscar
    public function buscar($identificacion){

        $validatedData = $this->validate([
            'identificacion' => 'required',
        ]);

        $buscarTercero=DB::table('clientetercero')->where("identificacion","LIKE",$identificacion)->get();
        $busqueda=count($buscarTercero);
        if ($busqueda===1) {
            $this->tipoIdentificacion=$buscarTercero[0]->tipoIdentificacion;
        }else{
            session()->flash('message', 'no existe el cliente');
            $this->limpiarCampos();
        }
        
    }
}
