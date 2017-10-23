@include('partials._head')

<body>
	@include('partials._header')

	@include('partials._messages')

	<div class="container downed">
		<table class="table table-striped table-hover">
			<thead>
				<th>Индекс</th>
				<th>Име</th>
				<th>Креирана на</th>
				<th>Последна промена</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				@foreach($categories as $cat)
					<tr>
						<td>{{$cat->id}}</td>
						<td>{{$cat->name}}</td>
						<td>{{$cat->created_at}}</td>
						<td>{{$cat->updated_at}}</td>
						<td>
							{{ Form::model($cat, ['route' => ['categories.update', $cat->id], 'method' => 'PUT' ]) }}

								{{ Form::text('name', null, ['class' => 'form-control']) }}
								{{ Form::submit('Промени', ['class' => 'btn btn-warning btn-xs'])}}

							{{ Form::close() }}
						</td>
						<td>
							{{ Form::open(['route' => ['categories.destroy', $cat->id], 'method' => 'DELETE']) }}

								{{ Form::submit('Избриши', ['class' => 'btn btn-danger btn-xs'])}}

							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="container form-margin form-bgcolor">
		{{ Form::open(['route' => 'categories.store']) }}
			<p><span>Додади категорија:</span></p>

			{{ Form::label('name', 'Име на категорија:') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}

			{{ Form::submit('Зачувај', ['class' => 'btn btn-primary form-control-vmargin']) }}
			

		{{ Form::close() }}
	</div>


	@include('partials._signnscript')

	@include('partials._footer')

</body>