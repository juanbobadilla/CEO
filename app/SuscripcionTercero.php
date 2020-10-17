<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuscripcionTercero extends Model
{
	//nombro la tabla de referencia al mismo modelo
    public $table = "clientetercero";

    //nombro la llave primaria de la tabla de referencia
    protected $primaryKey = 'idtercero';

    //desactivo los campos que se adiccionan como el "created_at y el updated_at"
    public $timestamps=false;

    //especifico los campos que se deben llenar obligatoriamente.
    protected $fillable =[
    	'tipoIdentificacion',
    	'identificacion',
    	'nombresApellidos',
    	'fechaNacimiento',
    	'profesion',
    	'direccion',
    	'telefono',
    	'movil',
    	'correo',
    	'tipoOrganizacion',
    	'personeriaTributaria',
    	'regimenTributario',
    	'cargo'
    ];

    //se especifican los campos que no queremos asignar
    protected $guarded=[

    ];
}
