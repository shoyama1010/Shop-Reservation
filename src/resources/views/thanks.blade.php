@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-body">
			<h1>ご予約ありがとうございます</h1>
			<a href="{{ route('shop.index') }}" class="btn btn-primary">戻る</a>
		</div>
	</div>
</div>
@endsection