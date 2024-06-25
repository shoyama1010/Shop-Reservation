<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ログイン</title>
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
	<div class="auth-container">
		<h2>Login</h2>
		
		<form method="POST" action="{{ route('login') }}">
			@csrf
			@if (count($errors) > 0)
			<p>メールもしくはパスワード入力に問題があります。</p>
			@endif
			<div class="input-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit">ログイン</button>
		</form>
		
	</div>
</body>

</html>




