@extends('layouts.app')

@section('content')
<div class="container">
	<h1>{{ Auth::user()->name }}さん</h1>
	<h2>予約状況</h2>
	<ul>
		@foreach(Auth::user()->reservations as $reservation)
		<li>{{ $reservation->shop->shop_name }} - {{ $reservation->reservation_datetime }} - {{ $reservation->number_of_people }}人</li>
		@endforeach
	</ul>
	<h2>お気に入り店舗</h2>
	<ul>
		@foreach(Auth::user()->favorites as $favorite)
		<li>{{ $favorite->shop->shop_name }}</li>
		@endforeach
	</ul>
</div>
@endsection