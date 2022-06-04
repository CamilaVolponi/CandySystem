<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="{{ asset('imagens/logoBrigadeiro.png') }}">
		<title>@yield('title', 'Candy System')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <!-- <script type="text/javascript" src="js/modaisProduto.js" defer></script> -->
        <script type="text/javascript" src="js/modaisProduto.js" defer></script>
	</head>
	<body>
		@yield('body')
	</body>
</html>
