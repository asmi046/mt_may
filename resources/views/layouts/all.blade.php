<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">

    <meta name="_token" content="{{ csrf_token() }}">

    <script src="https://cdn.glitch.global/8352fc0e-bebe-4680-ae0b-269da8b54259/ScrollSmoother.min.js"></script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])

</head>
<body>
    <div class="modal_win" id="global_app">
        <modal-window rout="/send_consult" redirect="/thencs" hesh="showModal" title="Помощь специалиста" subtitle="Мы свяжемся с Вами в ближайшее время"></modal-window>
    </div>
    <x-menues.side-menu></x-menues.side-menu>
    <main id="main">
        <div id="smooth-wrapper">
            <div id="smooth-content">
                @yield('main')
            </div>
        </div>

    </main>

</body>

<x-footer></x-footer>

</html>
