<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="/"> Home </a>
        <a href="/contato"> Contato </a>
        <a href="/quem-somos"> Quem Somos </a>
    </header>

    @yield("content")

    <footer>
        <p> Rodapé </p>
    </footer>
</body>
</html>