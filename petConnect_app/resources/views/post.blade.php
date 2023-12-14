<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Post</title>
</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row text-center mt-5">
                <h2 style="color: black">{{ $post->title }}</h2>
                <p><small>{{ $post->user->last_name }} {{ $post->user->first_name }} - {{ $post->created_at }}</small></p>
                <img src="{{ asset('storage/blog/' . $post->photo) }}" class="img-fluid">
                <p class="mt-5 mb-5 text-start">
                    {{ $post->content }}
                </p>
            </div>
        </div>

        @include('partials.footer')
    </div>
</body>

</html>
