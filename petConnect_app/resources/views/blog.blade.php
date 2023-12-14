<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Blog</title>
    <style>
        h4,
        h5,
        h1 {
            color: black !important;
        }

        .img-container {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 110%;
            left: 10%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row text-center mt-5">
                <h4>The Blog</h4>
                <h1>WRITINGS FROM OUR EXPERTS</h1>
                <p>All you have to know about dogs and how to raise them is gathered here</p>
            </div>

            <div class="row mt-5">
                <img class="img-container" src="{{ asset('images/blog/brandon-day.jpg') }} " alt="...">
                <div class="overlay">
                    <p style="color: white"><small>KOUDEBI Nikos - 20 Nov 2023</small></p>
                    <h3 style="color: white!important">Why you should adopt a dog?</h3>
                    <div class="mt-3">
                        <a href="/blog/post" class="btn btn-outline-light">See more</a>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
            @foreach ($posts as $post)

                <div class="col-lg-4 col-sm-6">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="border: none">
                            <img src="{{ asset('storage/blog/' . $post->photo) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p><small>{{$post->user->last_name}} {{$post->user->first_name}} - {{$post->created_at}}</small></p>
                                <h5 class="card-title">{{$post->title}}</h5>
                                <a href="#" class="btn btn-outline-dark">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>

            <!--Pagination-->
            <div class=" mt-5 mb-5 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        @include('partials.footer')
    </div>


</body>

</html>
