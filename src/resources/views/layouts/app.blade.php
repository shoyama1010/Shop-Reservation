<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Rese') }}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<!-- {{ config('app.name', 'Rese') }} -->
					Rese
				</a>

				<div class="filter-container">
					<div class="search-container">

						<form method="GET" action="{{ route('shop.searchByArea') }}">
							<input type="text" name="area" placeholder="All area">
							<button type="submit">検索</button>
						</form>
						<form method="GET" action="{{ route('shop.searchByGenre') }}">
							<input type="text" name="genre" placeholder="All genre">
							<button type="submit">検索</button>
						</form>
						<form method="GET" action="{{ route('shop.searchByName') }}">
							<input type="text" name="name" placeholder="shop search">
							<button type="submit">検索</button>
						</form>
					</div>

					<!-- <select> 
						<option value="all-areas">全エリア</option>  -->
					<!-- 全エリアをテーブルに追加   -->
					<!-- </select>  
					<select>
						<option value="all-genres">全ジャンル</option>  -->
					<!-- 全ジャンルをテーブルに追加 -->
					<!-- </select>
					<input type="text" placeholder="検索...">   -->

					<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> -->

					<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto"></ul>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<button type="button" class="btn btn-link" data-toggle="modal" data-target="#menuModal">
									<i class="fas fa-bars"></i>
								</button>
							</li>
						</ul>
					</div>
				</div>
		</nav>

		@include('partials.modal')

		<main class="py-4">
			@yield('content')
		</main>
	</div>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>