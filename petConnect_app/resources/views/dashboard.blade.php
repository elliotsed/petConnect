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
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">PetConnect</a>
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
                            <a class="card-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <div class="card mb-3 text-bg-primary" style="width: 18rem;">
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
                                                        placeholder="Ad's title">
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
                            <a class="card-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                <div class="card mb-3 text-bg-primary" style="width: 18rem;">
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

                        <div class="col-md-4">
                            <div class="card mb-3 text-bg-primary" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="content-section hidden-section" id="orders-section">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Orders</h1>
                    </div>
                </div>

                <div class="content-section hidden-section" id="product-section">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Products</h1>
                    </div>
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
