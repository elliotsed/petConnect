<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Blog</title>
</head>

<body>
    <div class="container">
        @include('partials.navbar')

        <div class="row text-center">
            <h4>The Blog</h4>
            <h2>WRITINGS FROM OUR EXPERTS</h2>
            <p>All you have to know about dogs and how to raise them is gathered here</p>
        </div>
        <div class="row">
            <img src="{{asset('images/blog/karsten-winegeart-KIVQIZnDbWI-unsplash.jpg')}}" alt="">
        </div>

        @include('partials.footer')
    </div>


</body>

</html>
