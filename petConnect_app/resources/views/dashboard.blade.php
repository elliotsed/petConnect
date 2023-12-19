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
    </style>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
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
                            <a class="nav-link active" aria-current="page" href="#">
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
                            <a class="nav-link" href="#">
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
                            <a class="nav-link" href="#">
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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3>Formulaire Pour Ajout de Chien Pour le Catalogue</h3>

                            <div>
                                <input class="form-control mb-1" type="text" name="caracteristic" placeholder="Caracteristic du chien">
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="age" placeholder="Âge du chien">
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="title" placeholder="Titre du produit">
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="gender" placeholder="Sexe du chien">
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="race_id" placeholder="ID de la race">
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="price" placeholder="Prix du chien">
                            </div>
                            <div>
                                <label class="form-label" for="customFile">Photo</label>
                                <input type="file" class="form-control mb-1" name="photo" id="customFile" />
                            </div>
                            <div>
                                <input class="form-control mb-1" type="text" name="user_id" placeholder="ID de l'utilisateur">
                            </div>
                            <button class="btn btn-dark" type="submit">Ajouter un chien</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Formulaire Pour Ajout de Post Pour le Blog</h3>
                        <form action="{{ route('add.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input class="form-control mb-1" type="text" name="title"
                                    placeholder="Titre du post">
                            </div>
                            <div>
                                <textarea class="form-control mb-1" name="content" placeholder="contenu du post"></textarea>
                            </div>
                            <div>
                                <label class="form-label" for="customFile">Photo</label>
                                <input type="file" class="form-control mb-1" name="photo" id="customFile" />
                            </div>

                            <button class="btn btn-dark" type="submit">Ajouter un chien</button>
                        </form>
                    </div>
                </div>
                <!-- Votre contenu va ici -->
            </main>
        </div>
    </div>

</body>

</html>
