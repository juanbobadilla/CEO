<div class="mt-4 container-fluid">

	<form class="form">
	  <div class="text-center mb-4">
	    <h1 class="h3 mb-3 font-weight-normal">Registro de usuario</h1>
	  </div>

	  <div class="form-label-group pb-3">
	  	<label> Nombre del usuario</label>
	    <input type="text" class="form-control" placeholder="Nombre"  autofocus="" wire:model="name">
	    @error('name') <span class="error alert-danger text-danger">{{ $message }}</span> @enderror
	  </div>

	  <div class="form-label-group pb-3">
	  	<label> Correo</label>
	    <input type="email" class="form-control" placeholder="email" wire:model="email">
	    @error('email') <span class="error alert-danger text-danger">{{ $message }}</span> @enderror
	  </div>

	  <div class="form-label-group pb-3">
	  	<label> password</label>
	    <input type="password" class="form-control" placeholder="password" wire:model="password">
	    @error('password') <span class="error alert-danger text-danger">{{ $message }}</span> @enderror
	  </div>

	  <button class="btn btn-lg btn-primary btn-block" wire:click.prevent="Ingresar">Registrarse</button>
	  <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
	</form>

</div>