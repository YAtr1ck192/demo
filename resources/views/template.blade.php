<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('comfort.ico') }}">
    <title>{{ $title ?? 'Комфорт' }}</title>
</head>
<body>
    <header>
        <a href="/products">Товары</a>
        <a href="/" class="logo-wrapper">
            <img src="{{ asset('logo.png') }}" alt="logo">
            Комфорт
        </a>
        <a href="/workshops">Цехи</a>
    </header>
    <div class="content-wrapper">
        @yield('content')
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Candara, sans-serif;
        font-size: 24px;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 50px;
        margin: 0 auto;
        width: 100%;
        background: #D2DFFF;
    }

    header a {
        text-decoration: none;
        color: white;
    }

    header .logo-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
        font-size: 20px;
        padding: 5px;
    }

    header img {
        width: 80px;
        height: 80px;
        object-fit: contain;
    }

    .content-wrapper {
        max-width: 75%;
        width: 100%;
        padding: 20px;
        margin: 0 auto;
    }
</style>
