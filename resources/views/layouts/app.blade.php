<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Система учета клиентов фитнес-клуба</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: white;">Fitness Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">Доступные зантия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all-trainers') }}" style="color: white;">Список тренеров</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all-users') }}" style="color: white;">Список клиентов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('type-classes') }}" style="color: white;">Типы занятий</a>
                </li>
            </ul>

        </div>
       <!-- <form class="form-inline my-2 my-lg-0">
            <span style="margin-right: 20px;color: white;font-weight: 500;"></span>
            <a href="components/exit.php" class="btn btn-dark my-2 my-sm-0" type="submit">Выход</a>
        </form> -->
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
