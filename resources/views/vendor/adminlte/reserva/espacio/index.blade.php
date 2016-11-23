@extends('adminlte::layouts.app')
@section('encabezado')
	Lista de Espacios <a href="espacio/create"><button class="btn btn-success">Nuevo</button></a>
@endsection
{{ Session::get('message') }}
@section('main-content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			@include('adminlte::reserva.espacio.search')
		</div>	
	</div>
	<div class="row">
		<div class="=col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Capacidad</th>
						<th>Opciones</th>
					</thead>
					@foreach($espacios as $espa)
					<tr>
						<td>{{$espa->id}}</td>
						<td>{{$espa->nomb}}</td>
						<td>{{$espa->desc}}</td>
						<td>{{$espa->capa}}</td>

						<td><a href="{{URL::action('EspacioController@edit',$espa->id)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$espa->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a></td>
						
					</tr>
					@include('adminlte::reserva.espacio.modal')
					@endforeach
				</table>
			</div>
			{{$espacios->render()}}
		</div>
	</div>
@endsection