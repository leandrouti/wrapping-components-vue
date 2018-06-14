<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        
    </head>
    <body>
        <div id="app">
            <carousel :autoplay="true">
                <img src="https://placeimg.com/640/480/any">
                <img src="https://placeimg.com/640/480/any?2">
                <img src="https://placeimg.com/640/480/any?3">
                <img src="https://placeimg.com/640/480/any?4">
                <img src="https://placeimg.com/640/480/any?5">
            </carousel> 
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
