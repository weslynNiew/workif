<header class="p-3 border border-custom text-white">
	<div class="container cor-bege ">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
				<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
					<use xlink:href="#bootstrap" />
				</svg>
			</a>

			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<a href="/">
					<img class="card-img-top" src="{{URL::asset('/images/workif.png')}}" alt="Checklist Pic" width="50px" height="50px">
				</a>
			</ul>

			@auth
			
  <div class="dropdown">
    <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="{{route('users.show',auth()->user()->id)}}">Perfil</a>
      <a class="dropdown-item" href="#">Configurações</a>
      <a class="dropdown-item" href="{{route('logout.perform')}}">Sair</a>
    </div>
</div>
			@endauth
		</div>
	</div>
</header>