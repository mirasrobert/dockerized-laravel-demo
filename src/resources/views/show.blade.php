<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .m-auto {
                width: 100%;
                margin: 0 auto;
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mt-5 m-auto">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $post->title }}</h2>
                        <p class="text-muted">by: {{ $post->user->name }}, {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</p>
                        <p>{{ $post->body }}</p>
                        <a href="/posts">Go back</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
