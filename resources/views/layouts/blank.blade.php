<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="mobile-web-app-capable" content="yes">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <meta property="og:site_name" content="{{ config('app.name', 'pixelfed') }}">
    <meta property="og:title" content="{{ $title or config('app.name', 'pixelfed') }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{request()->url()}}">
    @stack('meta')

    <meta name="medium" content="image">
    <meta name="theme-color" content="#10c5f8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png?v=2">
    <link rel="canonical" href="{{request()->url()}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="">
    <main id="content">
        @yield('content')
    </main>
    @include('layouts.partial.footer')
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
