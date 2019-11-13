<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
<link rel="stylesheet" href="/{{ config('app.name') }}/public{{ mix('css/app.css') }}">
</head>
<body>

    <div id="app">
        <example-component></example-component>
    </div>


<script src="/{{ config('app.name') }}/public{{ mix('js/app.js') }}"></script>
</body>
</html>
