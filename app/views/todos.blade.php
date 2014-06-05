<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos Demo</title>
	<style>
		body {
			padding: 10px;
		}
	</style>
</head>
<body>
	@foreach($todos as $item)
	{{ $item->title }}<br>
	@endforeach
	<script src="assets/jquery/jquery-2.1.1.min.js"></script>
</body>
</html>
