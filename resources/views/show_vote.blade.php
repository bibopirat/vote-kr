<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<!-- Стили -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<!-- Заголовок вкладки -->
	<title>Голосование - Уточек программистам</title>
</head>

<body>
	<!-- НАЧАЛО: Навигация -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<!-- Логотип-ссылка на главную -->
			<a class="navbar-brand" href="/">
				<i class="fa fa-hand-paper-o" aria-hidden="true"></i> Голосования
			</a>

			<!-- Навигация из 1 элемента "Открыть голосование"  -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/vote/create">Открыть голосование</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- КОНЕЦ: Навигация -->

	<!-- НАЧАЛО: Хлебные крошки -->
	<nav class="breadcrumb">
		<div class="container">
			<ol class="breadcrumb my-0 py-0">
				<li class="breadcrumb-item">
					<a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					{{$votes['title']}}
				</li>
			</ol>
		</div>
	</nav>
	<!-- КОНЕЦ: Хлебные крошки -->

	<!-- НАЧАЛО: Основное содержимое страницы -->
	<main class="mt-5">
	
		<div class="container">
<img style="max-width: 150px" src="{{$votes['img']}}" alt="">
			<h1>	{{$votes['title']}}</h1>
			<hr>

			<!-- НАЧАЛО: Панель кнопочек -->
			<div class="mb-4">
			
				<a href="/vote/positive_inc/{{$votes['id']}}"" class="btn btn-outline-success mr-3">
					<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Я за!
					<span class="badge badge-pill badge-success">
						{{$votes['positive']}}
					</span>
				</a>
				<a href="/vote/negative_inc/{{$votes['id']}}"" class="btn btn-outline-danger mr-3">
					<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Я против!
					<span class="badge badge-pill badge-danger">
						{{$votes['negative']}}
					</span>
				</a>
			</div>
			<!-- КОНЕЦ: Панель кнопочек -->
			
			<div>
				<p>
					{{$votes['text']}}
				</p>
			</div>

		</div>
	
	</main>
	<!-- КОНЕЦ: Основное содержимое страницы -->

</body>

</html>
