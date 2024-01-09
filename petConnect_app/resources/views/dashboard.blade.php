<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <style>
        .fixed-sidebar {
            height: 100vh;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding-top: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            border-right: 1px solid #e5e5e5;
        }

        .card {
            transition: transform 0.3s;
            /* Ajoutez une transition pour un effet plus fluide */
        }

        .card:hover {
            transform: scale(1.1);
            /* Zoom au survol (ajustez la valeur selon votre préférence) */
        }

        .hidden-section {
            display: none;
        }

        .card-modal:hover {
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ url('/') }}">PetConnect</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu"
                class="col-md-3 navBorder fixed-sidebar col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky mt-3">
                    <ul class="nav flex-column">
                        <!-- Remplacez ces liens par les vôtres avec les bons href -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"
                                data-section-id="dashboard-section">
                                <!-- Remplacez le contenu du lien par vos propres icônes et textes -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-home align-text-bottom" aria-hidden="true">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-section-id="orders-section">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-file align-text-bottom" aria-hidden="true">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-section-id="product-section">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart align-text-bottom" aria-hidden="true">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                Products
                            </a>
                        </li>



                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="content-section" id="dashboard-section">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a class="card-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="text-decoration: none">
                                <div class="card mb-3 text-bg-dark" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Sell a Dog</h5>
                                        <p class="card-text">Add a new dog to the Catalog to reach potential buyers.</p>
                                    </div>
                                </div>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add a Dog</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('add.product') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h3>Fill this form to add a new dog in the catalog</h3>

                                                <div>
                                                    <input class="form-control mb-1" type="text" name="title"
                                                        placeholder="Product's title">
                                                </div>
                                                <div>
                                                    <input class="form-control mb-1" type="text"
                                                        name="caracteristic" placeholder="Dog's Caracteristics">
                                                </div>
                                                <div>
                                                    <input class="form-control mb-1" type="text" name="age"
                                                        placeholder="Age">
                                                </div>

                                                <div>
                                                    <select class="form-select mb-1" name="gender">
                                                        <option value="" selected disabled>Choose a Gender
                                                        </option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select class="form-select mb-1" name="race_id" id="race_id">
                                                        <option value="" selected disabled>Dog's race</option>
                                                        <option value="1">Labrador</option>
                                                        <option value="2">Berger-Allemand</option>
                                                        <option value="3">Beagle</option>
                                                        <option value="4">Rottweiler</option>
                                                        <option value="5">Pitbull</option>
                                                        <option value="6">Chihuahua</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input class="form-control mb-1" type="text" name="price"
                                                        placeholder="Price">
                                                </div>
                                                <div>
                                                    <label class="form-label" for="customFile">Photo</label>
                                                    <input type="file" class="form-control mb-1" name="photo"
                                                        id="customFile" />
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit"
                                                        class="btn btn-outline-dark mt-2">Add</button>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-4">
                            <a class="card-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                style="text-decoration: none">
                                <div class="card mb-3 text-bg-dark" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Post an article</h5>
                                        <p class="card-text">Add a new article to the blog and let the world read it.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add an Article</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Fill this form to add a new article to the blog</h3>
                                            <form action="{{ route('add.post') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div>
                                                    <input class="form-control mb-1" type="text" name="title"
                                                        placeholder="Article's Title">
                                                </div>
                                                <div>
                                                    <textarea class="form-control mb-1" name="content" placeholder="Content"></textarea>
                                                </div>
                                                <div>
                                                    <label class="form-label" for="customFile">Photo</label>
                                                    <input type="file" class="form-control mb-1" name="photo"
                                                        id="customFile" />
                                                </div>

                                                <div class="d-flex justify-content-center">
                                                    <button type="submit"
                                                        class="btn btn-outline-dark mt-2">Add</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--
                        <div class="col-md-4">
                            <div class="card mb-3 text-bg-dark" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>

                <div class="content-section hidden-section" id="orders-section">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Orders</h1>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Seller</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userOrders as $order)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/catalog/' . $order->product->photo) }}"
                                            alt="{{ $order->product->title }} Image" style="max-width: 50px;">
                                    </td>
                                    <td>{{ $order->product->title }}</td>
                                    <td>{{ $order->product->user->first_name }} {{ $order->product->user->last_name }}
                                    </td>
                                    <td>{{ $order->product->price }}$</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 640 512">
                                                    <path fill="green"
                                                        d="M14 325.3c2.3-4.2 5.2-4.9 9.7-2.5c10.4 5.6 20.6 11.4 31.2 16.7a595.88 595.88 0 0 0 127.4 46.3a616.61 616.61 0 0 0 63.2 11.8a603.33 603.33 0 0 0 95 5.2c17.4-.4 34.8-1.8 52.1-3.8a603.66 603.66 0 0 0 163.3-42.8c2.9-1.2 5.9-2 9.1-1.2c6.7 1.8 9 9 4.1 13.9a70 70 0 0 1-9.6 7.4c-30.7 21.1-64.2 36.4-99.6 47.9a473.31 473.31 0 0 1-75.1 17.6a431 431 0 0 1-53.2 4.8a21.3 21.3 0 0 0-2.5.3H308a21.3 21.3 0 0 0-2.5-.3c-3.6-.2-7.2-.3-10.7-.4a426.3 426.3 0 0 1-50.4-5.3A448.4 448.4 0 0 1 164 420a443.33 443.33 0 0 1-145.6-87c-1.8-1.6-3-3.8-4.4-5.7zM172 65.1l-4.3.6a80.92 80.92 0 0 0-38 15.1c-2.4 1.7-4.6 3.5-7.1 5.4a4.29 4.29 0 0 1-.4-1.4c-.4-2.7-.8-5.5-1.3-8.2c-.7-4.6-3-6.6-7.6-6.6h-11.5c-6.9 0-8.2 1.3-8.2 8.2v209.3c0 1 0 2 .1 3c.2 3 2 4.9 4.9 5c7 .1 14.1.1 21.1 0c2.9 0 4.7-2 5-5c.1-1 .1-2 .1-3v-72.4c1.1.9 1.7 1.4 2.2 1.9c17.9 14.9 38.5 19.8 61 15.4c20.4-4 34.6-16.5 43.8-34.9c7-13.9 9.9-28.7 10.3-44.1c.5-17.1-1.2-33.9-8.1-49.8c-8.5-19.6-22.6-32.5-43.9-36.9c-3.2-.7-6.5-1-9.8-1.5c-2.8-.1-5.5-.1-8.3-.1M124.6 107a3.48 3.48 0 0 1 1.7-3.3c13.7-9.5 28.8-14.5 45.6-13.2c14.9 1.1 27.1 8.4 33.5 25.9c3.9 10.7 4.9 21.8 4.9 33c0 10.4-.8 20.6-4 30.6c-6.8 21.3-22.4 29.4-42.6 28.5c-14-.6-26.2-6-37.4-13.9a3.57 3.57 0 0 1-1.7-3.3c.1-14.1 0-28.1 0-42.2s.1-28 0-42.1m205.7-41.9c-1 .1-2 .3-2.9.4a148 148 0 0 0-28.9 4.1c-6.1 1.6-12 3.8-17.9 5.8c-3.6 1.2-5.4 3.8-5.3 7.7c.1 3.3-.1 6.6 0 9.9c.1 4.8 2.1 6.1 6.8 4.9c7.8-2 15.6-4.2 23.5-5.7c12.3-2.3 24.7-3.3 37.2-1.4c6.5 1 12.6 2.9 16.8 8.4c3.7 4.8 5.1 10.5 5.3 16.4c.3 8.3.2 16.6.3 24.9a7.84 7.84 0 0 1-.2 1.4c-.5-.1-.9 0-1.3-.1a180.56 180.56 0 0 0-32-4.9c-11.3-.6-22.5.1-33.3 3.9c-12.9 4.5-23.3 12.3-29.4 24.9c-4.7 9.8-5.4 20.2-3.9 30.7c2 14 9 24.8 21.4 31.7c11.9 6.6 24.8 7.4 37.9 5.4c15.1-2.3 28.5-8.7 40.3-18.4a7.36 7.36 0 0 1 1.6-1.1c.6 3.8 1.1 7.4 1.8 11c.6 3.1 2.5 5.1 5.4 5.2c5.4.1 10.9.1 16.3 0a4.84 4.84 0 0 0 4.8-4.7a26.2 26.2 0 0 0 .1-2.8v-106a80 80 0 0 0-.9-12.9c-1.9-12.9-7.4-23.5-19-30.4c-6.7-4-14.1-6-21.8-7.1c-3.6-.5-7.2-.8-10.8-1.3c-3.9.1-7.9.1-11.9.1m35 127.7a3.33 3.33 0 0 1-1.5 3c-11.2 8.1-23.5 13.5-37.4 14.9c-5.7.6-11.4.4-16.8-1.8a20.08 20.08 0 0 1-12.4-13.3a32.9 32.9 0 0 1-.1-19.4c2.5-8.3 8.4-13 16.4-15.6a61.33 61.33 0 0 1 24.8-2.2c8.4.7 16.6 2.3 25 3.4c1.6.2 2.1 1 2.1 2.6c-.1 4.8 0 9.5 0 14.3s-.2 9.4-.1 14.1m259.9 129.4c-1-5-4.8-6.9-9.1-8.3a88.42 88.42 0 0 0-21-3.9a147.32 147.32 0 0 0-39.2 1.9c-14.3 2.7-27.9 7.3-40 15.6a13.75 13.75 0 0 0-3.7 3.5a5.11 5.11 0 0 0-.5 4c.4 1.5 2.1 1.9 3.6 1.8a16.2 16.2 0 0 0 2.2-.1c7.8-.8 15.5-1.7 23.3-2.5c11.4-1.1 22.9-1.8 34.3-.9a71.64 71.64 0 0 1 14.4 2.7c5.1 1.4 7.4 5.2 7.6 10.4c.4 8-1.4 15.7-3.5 23.3c-4.1 15.4-10 30.3-15.8 45.1a17.6 17.6 0 0 0-1 3c-.5 2.9 1.2 4.8 4.1 4.1a10.56 10.56 0 0 0 4.8-2.5a145.91 145.91 0 0 0 12.7-13.4c12.8-16.4 20.3-35.3 24.7-55.6c.8-3.6 1.4-7.3 2.1-10.9zM493.1 199q-19.35-53.55-38.7-107.2c-2-5.7-4.2-11.3-6.3-16.9c-1.1-2.9-3.2-4.8-6.4-4.8c-7.6-.1-15.2-.2-22.9-.1c-2.5 0-3.7 2-3.2 4.5a43.1 43.1 0 0 0 1.9 6.1q29.4 72.75 59.1 145.5c1.7 4.1 2.1 7.6.2 11.8c-3.3 7.3-5.9 15-9.3 22.3c-3 6.5-8 11.4-15.2 13.3a42.13 42.13 0 0 1-15.4 1.1c-2.5-.2-5-.8-7.5-1c-3.4-.2-5.1 1.3-5.2 4.8q-.15 5 0 9.9c.1 5.5 2 8 7.4 8.9a108.18 108.18 0 0 0 16.9 2c17.1.4 30.7-6.5 39.5-21.4a131.63 131.63 0 0 0 9.2-18.4q35.55-89.7 70.6-179.6a26.62 26.62 0 0 0 1.6-5.5c.4-2.8-.9-4.4-3.7-4.4c-6.6-.1-13.3 0-19.9 0a7.54 7.54 0 0 0-7.7 5.2c-.5 1.4-1.1 2.7-1.6 4.1l-34.8 100c-2.5 7.2-5.1 14.5-7.7 22.2c-.4-1.1-.6-1.7-.9-2.4" />
                                                </svg>
                                            </button>
                                            <form action="{{ route('delete.order', ['id' => $order->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24">
                                                        <g fill="none">
                                                            <path
                                                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                            <path fill="red"
                                                                d="M20 5a1 1 0 1 1 0 2h-1l-.003.071l-.933 13.071A2 2 0 0 1 16.069 22H7.93a2 2 0 0 1-1.995-1.858l-.933-13.07A1.017 1.017 0 0 1 5 7H4a1 1 0 0 1 0-2zm-6-3a1 1 0 1 1 0 2h-4a1 1 0 0 1 0-2z" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="content-section hidden-section" id="product-section">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Products</h1>
                    </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Caracteristics</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userProducts as $product)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/catalog/' . $product->photo) }}"
                                            alt="{{ $product->title }} Image" style="max-width: 50px;">
                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->caracteristic }}</td>
                                    <td>{{ $product->age }}</td>
                                    <td>{{ $product->gender }}</td>
                                    <td>{{ $product->price }}$</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#Backdrop{{ $product->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="blue"
                                                        d="M3.548 20.938h16.9a.5.5 0 0 0 0-1h-16.9a.5.5 0 0 0 0 1M9.71 17.18a2.587 2.587 0 0 0 1.12-.65l9.54-9.54a1.75 1.75 0 0 0 0-2.47l-.94-.93a1.788 1.788 0 0 0-2.47 0l-9.54 9.53a2.473 2.473 0 0 0-.64 1.12L6.04 17a.737.737 0 0 0 .19.72a.767.767 0 0 0 .53.22Zm.41-1.36a1.468 1.468 0 0 1-.67.39l-.97.26l-1-1l.26-.97a1.521 1.521 0 0 1 .39-.67l.38-.37l1.99 1.99Zm1.09-1.08l-1.99-1.99l6.73-6.73l1.99 1.99Zm8.45-8.45L18.65 7.3l-1.99-1.99l1.01-1.02a.748.748 0 0 1 1.06 0l.93.94a.754.754 0 0 1 0 1.06" />
                                                </svg>
                                            </button>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="Backdrop{{ $product->id }}" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit
                                                                Your Product
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('update.product',  ['id' => $product->id]) }}" method="put"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <h3>Fill this form to edit your product information</h3>

                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="title" placeholder="{{ $product->title }}">
                                                                </div>
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="caracteristic"
                                                                        placeholder="{{ $product->caracteristic }}">
                                                                </div>
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="age" placeholder="{{ $product->age }}">
                                                                </div>

                                                                <div>
                                                                    <select class="form-select mb-1" name="gender">
                                                                        <option value="{{ $product->gender }}" selected disabled>{{ $product->gender }}
                                                                        </option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <select class="form-select mb-1" name="race_id"
                                                                        id="race_id">
                                                                        <option value="" selected disabled>Choose a Gender</option>
                                                                        <option value="1">Labrador</option>
                                                                        <option value="2">Berger-Allemand</option>
                                                                        <option value="3">Beagle</option>
                                                                        <option value="4">Rottweiler</option>
                                                                        <option value="5">Pitbull</option>
                                                                        <option value="6">Chihuahua</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="price" placeholder="{{ $product->price }}">
                                                                </div>
                                                                <div>
                                                                    <label class="form-label"
                                                                        for="customFile">Photo</label>
                                                                    <input type="file" class="form-control mb-1"
                                                                        name="photo" id="customFile" />
                                                                </div>
                                                                <div class="d-flex justify-content-center">
                                                                    <button type="submit"
                                                                        class="btn btn-outline-dark mt-2">Edit</button>

                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{ route('delete.product', ['id' => $product->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24">
                                                        <g fill="none">
                                                            <path
                                                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                            <path fill="red"
                                                                d="M20 5a1 1 0 1 1 0 2h-1l-.003.071l-.933 13.071A2 2 0 0 1 16.069 22H7.93a2 2 0 0 1-1.995-1.858l-.933-13.07A1.017 1.017 0 0 1 5 7H4a1 1 0 0 1 0-2zm-6-3a1 1 0 1 1 0 2h-4a1 1 0 0 1 0-2z" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidebarLinks = document.querySelectorAll('.nav-link');

            sidebarLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Récupérer l'identifiant de la section à afficher
                    var sectionId = link.getAttribute('data-section-id');

                    // Masquer toutes les sections
                    var allSections = document.querySelectorAll('.content-section');
                    allSections.forEach(function(section) {
                        section.style.display = 'none';
                    });

                    // Afficher la section correspondante
                    var targetSection = document.getElementById(sectionId);
                    if (targetSection) {
                        targetSection.style.display = 'block';
                    }
                });
            });
        });
    </script>

</body>

</html>
