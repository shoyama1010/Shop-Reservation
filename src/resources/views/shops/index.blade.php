@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@foreach($shops as $shop)
		<div class="col-md-4">

			<div class="card">
				<img src="{{ $shop->image_url }}" class="card-img-top" alt="{{ $shop->shop_name }}">
				
				<div class="card-body">
					<h5 class="card-title">{{ $shop->shop_name }}</h5>
					
					<p class="card-text">{{ $shop->description }}</p>
					
					<a href="{{ route('shop.detail', $shop->id) }}" class="btn btn-primary">詳しくみる</a>

				</div>
			</div>
			
		</div>
		@endforeach
	</div>
</div>
@endsection