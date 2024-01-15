<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    @vite(['resources/js/app.css', 'resources/js/app.js'])

    <style>
        .customCard {
            transition: transform 0.3s;
            /* Ajoutez une transition pour un effet plus fluide */
        }

        .customCard:hover {
            transform: scale(1.1);
            /* Zoom au survol (ajustez la valeur selon votre préférence) */
        }

        .card-modal:hover {
            text-decoration: none;
            cursor: pointer;
        }

        .hidden-section {
          display: none;
        }
    </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="adminlte/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="adminlte/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="adminlte/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="" class="nav-link sideLink active" data-section-id="dashboard-section">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link sideLink" data-section-id="profile-section">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                          <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="btn" type="submit">
                                Logout
                            </a>
                        </form>
                      </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page dashboard -->
        <div class="content-section content-wrapper" id="dashboard-section">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v3</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v3</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Online Store Visitors</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">820</span>
                                            <span>Visitors Over Time</span>
                                        </p>
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success">
                                                <i class="fas fa-arrow-up"></i> 12.5%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="visitors-chart" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> This Week
                                        </span>

                                        <span>
                                            <i class="fas fa-square text-gray"></i> Last Week
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Your Products</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Product Title</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($userProducts as $product)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('storage/catalog/' . $product->photo) }}"
                                                            alt="{{ $product->title }} Image"
                                                            style="max-width: 50px;">
                                                    </td>
                                                    <td>{{ $product->title }}</td>
                                                    <td>{{ $product->price }}$</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button class="btn btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#Backdrop{{ $product->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="blue"
                                                                        d="M3.548 20.938h16.9a.5.5 0 0 0 0-1h-16.9a.5.5 0 0 0 0 1M9.71 17.18a2.587 2.587 0 0 0 1.12-.65l9.54-9.54a1.75 1.75 0 0 0 0-2.47l-.94-.93a1.788 1.788 0 0 0-2.47 0l-9.54 9.53a2.473 2.473 0 0 0-.64 1.12L6.04 17a.737.737 0 0 0 .19.72a.767.767 0 0 0 .53.22Zm.41-1.36a1.468 1.468 0 0 1-.67.39l-.97.26l-1-1l.26-.97a1.521 1.521 0 0 1 .39-.67l.38-.37l1.99 1.99Zm1.09-1.08l-1.99-1.99l6.73-6.73l1.99 1.99Zm8.45-8.45L18.65 7.3l-1.99-1.99l1.01-1.02a.748.748 0 0 1 1.06 0l.93.94a.754.754 0 0 1 0 1.06" />
                                                                </svg>
                                                            </button>

                                                            <!-- Edit Modal -->
                                                            <div class="modal fade" id="Backdrop{{ $product->id }}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="staticBackdropLabel">Edit
                                                                                Your Product
                                                                            </h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('update.product', ['id' => $product->id]) }}"
                                                                                method="put"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <h3>Fill this form to edit your product
                                                                                    information</h3>

                                                                                <div>
                                                                                    <input class="form-control mb-1"
                                                                                        type="text" name="title"
                                                                                        placeholder="{{ $product->title }}">
                                                                                </div>
                                                                                <div>
                                                                                    <input class="form-control mb-1"
                                                                                        type="text"
                                                                                        name="caracteristic"
                                                                                        placeholder="{{ $product->caracteristic }}">
                                                                                </div>
                                                                                <div>
                                                                                    <input class="form-control mb-1"
                                                                                        type="text" name="age"
                                                                                        placeholder="{{ $product->age }}">
                                                                                </div>

                                                                                <div>
                                                                                    <select class="form-select mb-1"
                                                                                        name="gender">
                                                                                        <option
                                                                                            value="{{ $product->gender }}"
                                                                                            selected disabled>
                                                                                            {{ $product->gender }}
                                                                                        </option>
                                                                                        <option value="Male">Male
                                                                                        </option>
                                                                                        <option value="Female">Female
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div>
                                                                                    <select class="form-select mb-1"
                                                                                        name="race_id" id="race_id">
                                                                                        <option value="" selected
                                                                                            disabled>Choose a Race
                                                                                        </option>
                                                                                        <option value="1">Labrador
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Berger-Allemand</option>
                                                                                        <option value="3">Beagle
                                                                                        </option>
                                                                                        <option value="4">
                                                                                            Rottweiler</option>
                                                                                        <option value="5">Pitbull
                                                                                        </option>
                                                                                        <option value="6">
                                                                                            Chihuahua</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div>
                                                                                    <input class="form-control mb-1"
                                                                                        type="text" name="price"
                                                                                        placeholder="Price">
                                                                                </div>
                                                                                <div>
                                                                                    <label class="form-label"
                                                                                        for="customFile">Photo</label>
                                                                                    <input type="file"
                                                                                        class="form-control mb-1"
                                                                                        name="photo"
                                                                                        id="customFile" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <button type="submit"
                                                                                        class="btn btn-outline-dark mt-2">Edit</button>

                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <form
                                                                action="{{ route('delete.product', ['id' => $product->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 24 24">
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
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Sales</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">$18,230.00</span>
                                            <span>Sales Over Time</span>
                                        </p>
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success">
                                                <i class="fas fa-arrow-up"></i> 33.1%
                                            </span>
                                            <span class="text-muted">Since last month</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="sales-chart" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> This year
                                        </span>

                                        <span>
                                            <i class="fas fa-square text-gray"></i> Last year
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">What You Can Do</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="m-3">
                                            <a class="card-modal" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop" style="text-decoration: none">
                                                <div class="card customCard text-bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Sell a Dog</h5>
                                                        <p class="card-text">Add a new dog to the Catalog to reach
                                                            potential buyers.</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add
                                                                a
                                                                Dog</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('add.product') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <h3>Fill this form to add a new dog in the catalog</h3>

                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="title" placeholder="Product's title">
                                                                </div>
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="caracteristic"
                                                                        placeholder="Dog's Caracteristics">
                                                                </div>
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="age" placeholder="Age">
                                                                </div>

                                                                <div>
                                                                    <select class="form-select mb-1" name="gender">
                                                                        <option value="" selected disabled>Choose
                                                                            a
                                                                            Gender
                                                                        </option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <select class="form-select mb-1" name="race_id"
                                                                        id="race_id">
                                                                        <option value="" selected disabled>Dog's
                                                                            race
                                                                        </option>
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
                                                                        name="price" placeholder="Price">
                                                                </div>
                                                                <div>
                                                                    <label class="form-label"
                                                                        for="customFile">Photo</label>
                                                                    <input type="file" class="form-control mb-1"
                                                                        name="photo" id="customFile" />
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
                                    </div>
                                    <div class="col-6">
                                        <div class="m-3">
                                            <a class="card-modal" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop2" style="text-decoration: none">
                                                <div class="card customCard text-bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Post an article</h5>
                                                        <p class="card-text">Add a new article to the blog and let the
                                                            world read it.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add
                                                                an
                                                                Article</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h3>Fill this form to add a new article to the blog</h3>
                                                            <form action="{{ route('add.post') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    <input class="form-control mb-1" type="text"
                                                                        name="title" placeholder="Article's Title">
                                                                </div>
                                                                <div>
                                                                    <textarea class="form-control mb-1" name="content" placeholder="Content"></textarea>
                                                                </div>
                                                                <div>
                                                                    <label class="form-label"
                                                                        for="customFile">Photo</label>
                                                                    <input type="file" class="form-control mb-1"
                                                                        name="photo" id="customFile" />
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
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- Content Wrapper. Contains page profile -->
        <div class="content-section hidden-section content-wrapper" id="profile-section">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
      
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="adminlte/img/user4-128x128.jpg"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">Nina Mcintire</h3>
      
                      <p class="text-muted text-center">Software Engineer</p>
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Followers</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                          <b>Following</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                          <b>Friends</b> <a class="float-right">13,287</a>
                        </li>
                      </ul>
      
                      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="adminlte/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore the hate as they create awesome
                              tools to help create filler text for everyone from bacon lovers
                              to Charlie Sheen fans.
                            </p>
      
                            <p>
                              <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                              <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                              <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                  <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                              </span>
                            </p>
      
                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                          </div>
                          <!-- /.post -->
      
                          <!-- Post -->
                          <div class="post clearfix">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="adminlte/img/user7-128x128.jpg" alt="User Image">
                              <span class="username">
                                <a href="#">Sarah Ross</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore the hate as they create awesome
                              tools to help create filler text for everyone from bacon lovers
                              to Charlie Sheen fans.
                            </p>
      
                            <form class="form-horizontal">
                              <div class="input-group input-group-sm mb-0">
                                <input class="form-control form-control-sm" placeholder="Response">
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-danger">Send</button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- /.post -->
      
                          <!-- Post -->
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="adminlte/img/user6-128x128.jpg" alt="User Image">
                              <span class="username">
                                <a href="#">Adam Jones</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                              <div class="col-sm-6">
                                <img class="img-fluid" src="adminlte/img/photo1.png" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="adminlte/img/photo2.png" alt="Photo">
                                    <img class="img-fluid" src="adminlte/img/photo3.jpg" alt="Photo">
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="adminlte/img/photo4.jpg" alt="Photo">
                                    <img class="img-fluid" src="adminlte/img/photo1.png" alt="Photo">
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
      
                            <p>
                              <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                              <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                              <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                  <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                              </span>
                            </p>
      
                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                          </div>
                          <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                          <!-- The timeline -->
                          <div class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <div class="time-label">
                              <span class="bg-danger">
                                10 Feb. 2014
                              </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-envelope bg-primary"></i>
      
                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 12:05</span>
      
                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
      
                                <div class="timeline-body">
                                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                  quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class="timeline-footer">
                                  <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-user bg-info"></i>
      
                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
      
                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                </h3>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-comments bg-warning"></i>
      
                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
      
                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
      
                                <div class="timeline-body">
                                  Take me to your leader!
                                  Switzerland is small and neutral!
                                  We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class="timeline-footer">
                                  <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <div class="time-label">
                              <span class="bg-success">
                                3 Jan. 2014
                              </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-camera bg-purple"></i>
      
                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
      
                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
      
                                <div class="timeline-body">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <div>
                              <i class="far fa-clock bg-gray"></i>
                            </div>
                          </div>
                        </div>
                        <!-- /.tab-pane -->
      
                        <div class="tab-pane" id="settings">
                          <form class="form-horizontal">
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="adminlte/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="adminlte/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="adminlte/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="adminlte/js/pages/dashboard3.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          var sidebarLinks = document.querySelectorAll('.sideLink');

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
