@extends('layouts.base')

@section('content')
no buscar color para la revision general (el id)
<br/>
solo hacer gestion de plan de tratamiento si no tiene plan activo
	<div>
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<div class="card panel-default">
					<div class="card-header text-center">
						<h4>Plan de Tratamiento</h4>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover" >
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombre</th>
									<th></th>

									@if (sizeof($planTratamiento) == 0)
									<th width="237">
										@can('planTratamientos.create')
										<a href="{{ route('planTratamiento.create', ['cita' =>$id]) }}" class="btn btn-block btn-success pull-right">
											Crear
										</a>
										@endcan
									</th>
									@else
									<th colspan="3" width="237">
										@can('planTratamientos.create')
										<a href="{{ route('planTratamiento.create', ['cita' =>$id])}}" class="btn btn-block btn-success pull-right">
											Crear
										</a>
										@endcan
									</th>
									@endif
								</tr>
							</thead>
							<tbody>
								@foreach($planTratamiento as $proceso)
									<tr>
										<td>{{$proceso->id}}</td>
									@foreach($proc as $procedimiento)
										@if($proceso->procedimiento_id == $procedimiento->id)
										<td>{{$procedimiento->nombre}}</td>
										<td>
											@can('planTratamientos.create')
											<a href="{{ route('planTratamiento.agenda',[ 'procedimiento'=> $procedimiento->id, 'paciente'=> $paciente] )}}" class="btn btn-sm btn-default bg-primary" style="color: white">Agendar Cita
											</a>
											@endcan
										</td>
										@break
										@endif
									@endforeach
										<td width="10px">
											@can('planTratamientos.show')
												<a href="{{ route('planTratamiento.show', ['cita' =>$id, 'planTratamiento'=> $proceso->id ]) }}" class="btn btn-sm btn-default bg-info" style="color: white">Ver
												</a>
											@endcan
										</td>
										<td width="10px">
											@can('planTratamientos.edit')
												<a href="{{ route('planTratamiento.edit', ['cita' =>$id, 'planTratamiento'=> $proceso->id ]) }}" class="btn btn-sm btn-default bg-success" style="color: white">Editar</a>
											@endcan
										</td>
										<td width="10px">
											@can('planTratamientos.destroy')
												{!! Form::open(['route' => ['planTratamiento.destroy', $proceso->id],
												'method' => 'DELETE']) !!}
													<button class="btn btn-sm btn-default bg-danger" style="color: white">
														Eliminar
													</button>
												{!! Form::close() !!}
											@endcan
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						{{$planTratamiento->render()}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection