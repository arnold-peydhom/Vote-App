<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand fst-italic" href="#">CSI3</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a @class([
                            'nav-link',
                            'active' =>
                                request()->route()->getName() === 'elections',
                        ]) href="{{ route('elections') }}">Elections</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('electeurs') }}" @class([
                            'nav-link',
                            'active' =>
                                request()->route()->getName() === 'electeurs',
                        ])>Electeurs</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('region.index') }}" @class([
                            'nav-link',
                            'active' => str_starts_with(
                                request()->route()->getName(),
                                'region.'),
                        ])>Regions</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('inscription') }}" @class([
                            'nav-link',
                            'active' =>
                                request()->route()->getName() === 'inscription',
                        ])>S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>


</html>
