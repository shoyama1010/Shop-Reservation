<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>会員登録</title>
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
	<div class="auth-container">
		<h2>Registration</h2>
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="input-group">
				<label for="name">Username</label>
				<input type="text" id="name" name="name" required>
				<!-- @if ($errors->has('name')) -->
				<!-- <span class="text-danger">{{ $errors->first('name') }}</span>
				@endif -->
			</div>

			<div class="input-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
				<!-- @if ($errors->has('email'))
				<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif -->
			</div>

			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password_confirmation" required>
				<!-- @if ($errors->has('password'))
				<span class="text-danger">{{ $errors->first('password') }}</span>
				@endif -->
			</div>
 			
			<button type="submit">登録</button>
		</form>
		<p>アカウントをお持ちの方はこちらから <a href="{{ route('login') }}">ログイン</a></p>
	</div>
</body>

</html>