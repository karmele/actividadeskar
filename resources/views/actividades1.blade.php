<!--COMPLETA: extiende el layout -->
@extends('layouts.app')

<!--COMPLETA: empieza la sección -->
@section('content')
<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
		
			<!-- En este punto IRA el formulario para añadir una nueva actividad -->
			
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
										<td class="table-text"><div>{{ $actividad->nombre}}</div></td>
										<td class="table-text"><div>{{ $actividad->fecha}}</div></td>
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