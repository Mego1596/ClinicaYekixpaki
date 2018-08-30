@extends('layouts.base')

@section('bread')
<li class="breadcrumb-item">
  <a href="/roles">Roles</a>
</li>

<li class="breadcrumb-item">
  <a class="breadcrumb-item active">Detalle Rol</a>
</li>

@endsection

@section('content')
	<div>
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<div class="card card-default">
					<div class="card-header text-center">
					<div class="row">
							<div class="col-md-1">
								<a href="{{ route('roles.index') }}" class="btn btn-block btn-secondary">
								Atrás</a>
							</div>
							<div class="col-md-10">
								<h4>Rol</h4>
							</div>
						</div>
					</div>
					<div class="card-body">
					<p><strong>Nombre: </strong><br>{{ $role->name }}</p>
					<p><strong>Slug: </strong><br>{{ $role->slug }}</p>
					<p align="justify"><strong>Descripcion: </strong><br>{{ $role->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection