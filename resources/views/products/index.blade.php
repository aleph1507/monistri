@include('partials._head')

<body>
	
	@include('partials._header')

	<div class="container downed">

		@include('partials._messages')

		<table class="table table-hover table-striped">
			<thead>
				<th>Продукт</th>
				<th>Цена</th>
				<th>Слика</th>
				<th>Категорија</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
			@foreach($products as $product)
					<tr>
						<td>{{ $product->ime }}</td>
						<td>{{ $product->cena }}</td>
						<td>
							<img src="{{ asset('images/product_images/' . $product->slika) }}" alt="" class='product_thumbnail'>
						</td>
						<td>Категорија: {{ $product->category->name }}</td>
						<td>Тип: {{ $product->category->type == 1? 'Накит' : 'Дел' }}</td>
						<td>
							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Промени</a>
						</td>
						<td>
							{!!Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}

								{{ Form::submit('Избриши', ['class' => 'btn btn-danger']) }}

							{!! Form::close() !!}

						</td>
					</tr>
			@endforeach
			</tbody>
		</table>

	</div>

	<div class="container form-margin form-bgcolor add-product-form">
		<p><span>Додади продукт:</span></p>
		{{ Form::open(['route' => 'products.store', 'files' => 'true']) }}

			{{ Form::label('ime', 'Име на продукт:', ['class' => 'form-control-vmargin']) }}
			{{ Form::text('ime', null, ['class' => 'form-control'])}}

			{{ Form::label('cena', 'Цена', ['class' => 'form-control-vmargin']) }}
			{{ Form::text('cena', null, ['class' => 'form-control'])}}

			{{ Form::label('category', 'Категорија', ['class' => 'form-control-vmargin']) }}
			<select name="category" id="category" class='form-control'>
				@foreach($categories as $cat)
					<option value="{{ $cat->id }}">{{ $cat->name }}</option>
				@endforeach
			</select>

			{{ Form::label('slika', 'Слика:', ['class' => 'form-control-vmargin']) }}
			{{ Form::file('slika', ['accept' => 'image/*']) }}

			{{ Form::label('paypal_button', 'PayPal Копче', ['class' => 'form-control-vmargin']) }}
			{{ Form::textarea('paypal_button', null , ['class' => 'form-control', 'size' => '50x5', 'placeholder' => 'Paypal code'])}}

			{{ Form::label('apm', 'Додаден начин на плаќање', ['class' => 'form-control-vmargin']) }}
			{{ Form::textarea('apm', 'Додатен начин на плаќање: mailto:delfinahandmade@gmail.com', ['class' => 'form-control', 'size' => '50x5', 'placeholder' => 'Додатен начин на плаќање'])}}

			{{ Form::submit('Зачувај', ['class' => 'btn btn-primary form-control-vmargin'])}}

		{{ Form::close() }}
	</div>
	

	@include('partials._footer')
    
    @include('partials._signnscript')

</body>