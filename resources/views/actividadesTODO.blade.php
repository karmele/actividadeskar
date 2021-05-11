@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			
			<div class="panel panel-default">
				<div class="panel-heading">
					Nueva Actividad
				</div>

				<div class="panel-body">
					<!-- Mostrar errores de validación -->
					@include('common.errors')

					<!-- Formulario para añadir una actividad -->
					<form action="{{url('/actividad')}}" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Nombre de la actividad  -->
						<div class="form-group">
							<label for="actividad-nombre" class="col-sm-3 control-label">Actividad</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="actividad-nombre" class="form-control" value="{{ old('name') }}">
							</div>
						</div>
						<!-- Fecha de la actividad  -->
						<div class="form-group">
							<label for="actividad-fecha" class="col-sm-3 control-label">Fecha</label>

							<div class="col-sm-6">
								<input type="text" name="fecha" id="actividad-fecha" class="form-control" value="{{ old('fecha') }}">
							</div>
						</div>

						<!-- Add Actividad Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i>Nueva Actividad
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>


			<!-- Actividades Actuales -->
			@if (count($actividades) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						 Actividades Actuales
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Actividad</th>
								<th>Fecha</th>
							</thead>
							<tbody>
								@foreach ($actividades as $actividad)
									<tr>
										<td class="table-text"><div>{{ $actividad->nombre }}</div></td>
										<td class="table-text"><div>{{ $actividad->fecha }}</div></td>
										<td>
											<form action="{{url('/actividad/deleteactividad')}}" method="POST">
												{{ csrf_field() }}
												<!--{{ method_field('DELETE') }}-->
												<input type="hidden" name="id_actividad" value="{{$actividad->id}}" />
												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>Eliminar
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
