<div class="mt-3">

	<form class="p-4" wire:submit.prevent="add">
		<div class="text-center h4">Creacion de terceros</div>

	  <div class="form-row mt-4">
	  	<div class="form-group col-md-4">
	      <label>Tipo de identificacion</label>
	      <select name="" class="form-control" wire:model="tipoIdentificacion">
	      	<option value="">Escoje un opcion</option>
	      	<option value="TI">TI</option>
	      	<option value="CC">CC</option>
	      	<option value="NIT">NIT</option>
	      	<option value="EXPECIAL EXTRANJERA">EXPECIAL EXTRANJERA</option>
	      </select>
	      @error('tipoIdentificacion') <span class="error">{{ $message }}</span> @enderror
	    </div>

	    
	    <div class="form-group col-md-3">
	      <label>Identificacion del cliente</label>
	      <input type="number" class="form-control" wire:model="identificacion">
	      @error('identificacion') <span class="error">{{ $message }}</span> @enderror
	    </div>

	    @if( "$tipoIdentificacion" ==="NIT")
	    <div class="form-group col-md-1">
	      <label>DEV</label>
	      <input type="number" class="form-control">
	    </div>
	    @endif

	    <div class="form-group col-md-4">
	      <label>Nombres y apellidos</label>
	      <input type="text" class="form-control" wire:model="nombresApellidos">
	       @error('nombresApellidos') <span class="error">{{ $message }}</span> @enderror
	    </div>

	  </div>

	  <div class="form-row">
	    
	  </div>

	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label>Fecha de nacimiento</label>
	      <input type="date" class="form-control" wire:model="fechaNacimiento">
	      @error('fechaNacimiento') <span class="error">{{ $message }}</span> @enderror
	    </div>
	    <div class="form-group col-md-6">
	      <label>Profesión</label>
	      <input type="text" class="form-control">
	    </div>
	  </div>
	  
	  <div class="form-row">
	    <div class="form-group col-md-4">
	      <label>Tipo de organización</label>
	      <select name="" class="form-control">
	      	<option value="">Escoje un opcion</option>
	      	<option value="Natural">Natural</option>
	      	<option value="Sociedad por acciones simplificadas">Sociedad por acciones simplificadas</option>
	      </select>
	    </div>
	    <div class="form-group col-md-4">
	      <label>Personeria tributaria</label>
	      <select name="" class="form-control">
	      	<option value="">Escoje un opcion</option>
	      	<option value="Natural">Natural</option>
	      	<option value="Juridica">Juridica</option>
	      </select>
	    </div>
	    <div class="form-group col-md-4">
	      <label>Regimen tributario</label>
	      <select name="" class="form-control">
	      	<option value="">Escoje un opcion</option>
	      	<option value="RegimenComun">Regimen comun</option>
	      	<option value="RegimenSimplificada">Regimen simplificada</option>
	      	<option value="RegimenEspecial">Regimen especial</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-2">
	      <label>Cargo</label>
	      <input type="text" class="form-control">
	    </div>
	    <div class="form-group col-md-3">
	      <label>Dirección</label>
	      <input type="text" class="form-control">
	    </div>
	    <div class="form-group col-md-2">
	      <label>Telefono</label>
	      <input type="number" class="form-control">
	    </div>
	    <div class="form-group col-md-2">
	      <label>Movil</label>
	      <input type="number" class="form-control">
	    </div>
	    <div class="form-group col-md-3">
	      <label>Correo</label>
	      <input type="email" class="form-control">
	    </div>
	  </div>
	  <div class=" align-content-center">
	  	<button type="submit" class="btn btn-primary btn-block">Sign in</button>
	  </div>
	</form>

</div>