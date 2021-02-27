<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oss Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="has-background-grey-lighter">
    <div class="container is-flex is-flex-direction-column">
        <header class="has-background-dark p-5">
            <h1 class="title is-1 has-text-light">Oss Gallery</h1>
        </header>

        <main class="has-background-light p-5 is-flex-grow-1">

            <div class="block">
                @yield ('navigation')
            </div>

            <div class="block">
                @yield ('content')
            </div>

        </main>
    </div>

    <script src="https://kit.fontawesome.com/afb9d39c37.js" crossorigin="anonymous"></script>
</body>
</html>