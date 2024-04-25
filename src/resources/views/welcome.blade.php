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
    </head>
    <body>
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                <h2>All Posts</h2>
                @forelse ($posts as $post)
                <div class="row">
                    <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">by: {{ $post->user->name }}, {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</h6>
                          <p class="card-text">
                            {{ $post->body }}
                          </p>
                          <a href="{{ route('posts.show', $post) }}" class="card-link">Read More</a>
                        </div>
                      </div>
                </div>
                @empty
                <div class="alert alert-primary" role="alert">
                    No Posts Available.
                </div>
                @endforelse
            </div>
            @if(count($posts) > 0)
            <div class="d-flex justify-content-between">
                {{ $posts->links() }}
            </div>
             @endif
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
