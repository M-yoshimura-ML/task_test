
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
</head>
<body>
<script src="{{ asset('js/app.js') }}"></script>
<a href="/contact/index">お問い合わせ一覧</a>

<div id="app">
	<div id="nav">
		<router-link to="/contact-us">ContactUs</router-link>
	</div>
	<router-view/>
 	</div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>