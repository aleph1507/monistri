@include('partials._head')

<body>

	<div class="container downed">

		@include('partials._header')

		@include('partials._messages')

		<div class="container form-margin form-bgcolor add-product-form">

			<p><span>Промени продукт:</span></p>

			{{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true] ) }}

				{{ Form::label('ime', 'Име на продуктот:') }}
				{{ Form::text('ime', null, ['class' => 'form-control']) }}

				{{ Form::label('cena', 'Цена:') }}
				{{ Form::text('cena', null, ['class' => 'form-control']) }}

				{{ Form::label('category', 'Категорија:', ['class' => 'form-control-vmargin'])}}
				<select name="category" id="category">
					@foreach($categories as $cat)
						<option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? "selected" : "" }}>{{ $cat->name }}</option>
					@endforeach
				</select>

				<img src="{{ asset('/images/product_images\\') . $product->slika }}" alt="Слика од продуктот" class='product-pic'>

				{{ Form::label('slika', 'Слика:') }}
				{{ Form::file('slika', ['accept' => 'image/*']) }}

				{{ Form::label('paypal_button', 'PayPal Копче', ['class' => 'form-control-vmargin']) }}
				{{ Form::textarea('paypal_button', null , ['class' => 'form-control', 'size' => '50x5', 'placeholder' => 'Paypal code'])}}

				{{ Form::label('apm', 'Додаден начин на плаќање', ['class' => 'form-control-vmargin']) }}
				{{ Form::textarea('apm', null, ['class' => 'form-control', 'size' => '50x5', 'placeholder' => 'Додатен начин на плаќање'])}}

				{{ Form::submit('Промени', ['class' => 'btn btn-primary form-control-vmargin'])}}

			{{ Form::close() }}
		</div>

		@include('partials._signnscript')

		@include('partials._footer')
	</div>

</body>