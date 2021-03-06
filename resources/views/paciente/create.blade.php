@extends('layouts.base')

@section('javascript')
<script>
$(document).ready(function(){
    $("#cosa").click(function(){
        document.getElementById('nombre3').style.display = 'block';
        document.getElementById('nombre3.2').style.display = 'block';
       	$("#cosa2").prop('checked',false);
       	$("#cosa").prop('disabled',true);
       	$("#cosa2").prop('disabled',false);
       	$("#nombre3").focus();
    });
    $("#cosa2").click(function(){
        document.getElementById('nombre3').style.display = 'none';
        document.getElementById('nombre3.2').style.display = 'none';
       	$("#cosa").prop('checked',false);
       	$("#cosa2").prop('disabled',true);
       	$("#cosa").prop('disabled',false);
       	$("#nombre3").val("");
    });

});
</script>
@endsection


@section('bread')
<li class="breadcrumb-item">
  <a href="/paciente">Paciente</a>
</li>

<li class="breadcrumb-item">
  <a class="breadcrumb-item active">Crear Paciente</a>
</li>

@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header text-center">
					<div class="row">
						<div class="col-md-2 col-sm-12">
							<a href="{{ route('paciente.index') }}" class="btn btn-block btn-secondary" style="width: 100%">
							<i class="fa fa-arrow-circle-left"></i> Atrás</a>
						</div>
						<div class="col-md-8">
							<h4>Crear paciente</h4>
						</div>
					</div>
				</div>
				<div class="card-body justify-content-center">

					{!! Form::open(['route' => 'paciente.store', 'autocomplete'=> 'off']) !!}

						@include('paciente.partials.form')

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection