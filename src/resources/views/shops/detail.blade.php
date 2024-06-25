@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="{{ $shop->image_url }}" class="img-fluid" alt="{{ $shop->shop_name }}">
		</div>
		<div class="col-md-6">
			<h1>{{ $shop->shop_name }}</h1>
			<p>{{ $shop->description }}</p>
			
			<form action="{{ route('reservation.store') }}" method="POST">
				@csrf
				<input type="hidden" name="shop_id" value="{{ $shop->id }}">
				<div class="form-group">
					<label for="reservation_datetime">予約日時</label>
					<input type="datetime-local" name="reservation_datetime" id="reservation_datetime" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="number_of_people">人数</label>
					<input type="number" name="number_of_people" id="number_of_people" class="form-control" required>
				</div>

				<button type="submit" class="btn btn-primary">予約する</button>

			</form>
		</div>
	</div>
</div>
@endsection