<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Catalog</title>
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">

    <style>
        h2 {
            color: black !important;
        }

        .image-container {
            position: relative;
            display: inline-block;

        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            /* Initialement caché */
        }

        .image-container:hover {
            opacity: 0.6;
            /* Opacité de l'image réduite au survol*/

        }

        .image-container:hover .overlay {
            opacity: 1;
            /* Affichage de l'overlay au survol */
        }

        #race-list li:hover {
            cursor: pointer;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')

        <div class="container">
            <div class="row text-center mt-5">
                <h2>Catalog</h2>
            </div>

            <div class="d-flex justify-content-center">
                <ul id="race-list" class="list-inline">
                    <li class="list-inline-item me-3" data-race_id="all"><small>ALL</small></li>
                    @foreach ($races as $race)
                        <li class="list-inline-item me-3" data-race_id="{{ $race->id }}">
                            <small>{{ strtoupper($race->name) }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="row mt-4 text-center">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6 col-md-4 dogo" data-race_id="{{ strtolower($product->race_id) }}">
                        <div class="d-flex justify-content-center">
                            <div class="card" style=" border: none;">
                                @if (Auth::check())
                                    <a class="" style="position: absolute; top: 0; right: 0; z-index: 1;">
                                        <form action="{{ route('add.order', ['id' => $product->user->id]) }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="btn btn-dark">
                                                <i class="fas fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                    </a>
                                @endif
                                <a href="{{ url('catalog/detail', ['id' => $product->id]) }}">
                                    <div class="image-container"
                                        style="background-image: url('{{ asset('storage/catalog/' . $product->photo) }}'); background-size: cover; background-position: center; height: 200px; width: 250px;">
                                        <div class="overlay">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path
                                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                                    <path fill="currentColor"
                                                        d="M12 4c2.787 0 5.263 1.257 7.026 2.813c.885.781 1.614 1.658 2.128 2.531c.505.857.846 1.786.846 2.656c0 .87-.34 1.799-.846 2.656c-.514.873-1.243 1.75-2.128 2.531C17.263 18.743 14.786 20 12 20c-2.787 0-5.263-1.257-7.026-2.813c-.885-.781-1.614-1.658-2.128-2.531C2.34 13.799 2 12.87 2 12c0-.87.34-1.799.846-2.656c.514-.873 1.243-1.75 2.128-2.531C6.737 5.257 9.214 4 12 4Zm0 2c-2.184 0-4.208.993-5.702 2.312c-.744.656-1.332 1.373-1.729 2.047C4.163 11.049 4 11.62 4 12c0 .38.163.951.569 1.641c.397.674.985 1.39 1.729 2.047C7.792 17.007 9.816 18 12 18s4.208-.993 5.702-2.312c.744-.657 1.332-1.373 1.729-2.047c.406-.69.569-1.261.569-1.641c0-.38-.163-.951-.569-1.641c-.397-.674-.985-1.39-1.729-2.047C16.208 6.993 14.184 6 12 6Zm0 3c.088 0 .175.004.261.011a2 2 0 0 0 2.728 2.728A3 3 0 1 1 12 9Z" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p><small> <strong> {{ $product->title }} </strong><br>
                                            {{ $product->price }}$</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('partials.footer')
    </div>
    <script src="{{ asset('js/filter.js') }}"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}",
            });
        @endif
    </script>
</body>

</html>
