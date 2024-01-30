<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetConnect | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

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

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a class="nav-link">
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11.25 19a.75.75 0 0 1 .75-.75h6a.25.25 0 0 0 .25-.25V6a.25.25 0 0 0-.25-.25h-6a.75.75 0 0 1 0-1.5h6c.966 0 1.75.784 1.75 1.75v12A1.75 1.75 0 0 1 18 19.75h-6a.75.75 0 0 1-.75-.75" />
                                    <path fill="currentColor"
                                        d="M15.612 13.115a1 1 0 0 1-1 1H9.756c-.023.356-.052.71-.086 1.066l-.03.305a.718.718 0 0 1-1.025.578a16.844 16.844 0 0 1-4.885-3.539l-.03-.031a.721.721 0 0 1 0-.998l.03-.031a16.843 16.843 0 0 1 4.885-3.539a.718.718 0 0 1 1.025.578l.03.305c.034.355.063.71.086 1.066h4.856a1 1 0 0 1 1 1z" />
                                </svg>
                            </span>
                            <button class="btn" type="submit">
                                Logout
                            </button>
                        </a>
                    </form>
                </li>

            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="{{ asset('images/logoPet.png') }}" alt="Pet Connect Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">PetConnect</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="" class="nav-link sideLink active" data-section-id="dashboard-section">
                                <span class="m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 1792 1408">
                                        <path fill="currentColor"
                                            d="M384 896q0-53-37.5-90.5T256 768t-90.5 37.5T128 896t37.5 90.5T256 1024t90.5-37.5T384 896m192-448q0-53-37.5-90.5T448 320t-90.5 37.5T320 448t37.5 90.5T448 576t90.5-37.5T576 448m428 481l101-382q6-26-7.5-48.5T1059 469t-48 6.5t-30 39.5L880 897q-60 5-107 43.5t-63 98.5q-20 77 20 146t117 89t146-20t89-117q16-60-6-117t-72-91m660-33q0-53-37.5-90.5T1536 768t-90.5 37.5T1408 896t37.5 90.5t90.5 37.5t90.5-37.5T1664 896m-640-640q0-53-37.5-90.5T896 128t-90.5 37.5T768 256t37.5 90.5T896 384t90.5-37.5T1024 256m448 192q0-53-37.5-90.5T1344 320t-90.5 37.5T1216 448t37.5 90.5T1344 576t90.5-37.5T1472 448m320 448q0 261-141 483q-19 29-54 29H195q-35 0-54-29Q0 1158 0 896q0-182 71-348t191-286T548 71T896 0t348 71t286 191t191 286t71 348" />
                                    </svg>
                                </span>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link sideLink" data-section-id="profile-section">
                                <span class="m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                            <path
                                                d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                                            <path
                                                d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21" />
                                        </g>
                                    </svg>
                                </span>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link sideLink" data-section-id="dogs-section">
                                <span class="m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="m239.71 125l-16.42-88a16 16 0 0 0-19.61-12.58l-.31.09L150.85 40h-45.7L52.63 24.56l-.31-.09a16 16 0 0 0-19.61 12.58L16.29 125a15.77 15.77 0 0 0 9.12 17.52a16.26 16.26 0 0 0 6.71 1.48a15.48 15.48 0 0 0 7.88-2.16V184a40 40 0 0 0 40 40h96a40 40 0 0 0 40-40v-42.15a15.5 15.5 0 0 0 7.87 2.16a16.31 16.31 0 0 0 6.72-1.47a15.77 15.77 0 0 0 9.12-17.54M32 128l16.43-88L90.5 52.37Zm144 80h-40v-12.69l13.66-13.65a8 8 0 0 0-11.32-11.32L128 180.69l-10.34-10.35a8 8 0 0 0-11.32 11.32L120 195.31V208H80a24 24 0 0 1-24-24v-60.89L107.92 56h40.15L200 123.11V184a24 24 0 0 1-24 24m48-80l-58.5-75.63L207.57 40zm-120 12a12 12 0 1 1-12-12a12 12 0 0 1 12 12m72 0a12 12 0 1 1-12-12a12 12 0 0 1 12 12" />
                                    </svg>
                                </span>
                                <p>
                                    Dogs
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link sideLink" data-section-id="blog-section">
                                <span class="m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 2048 2048">
                                        <path fill="currentColor"
                                            d="M2048 0v1536H731l-475 475v-475H0V0zM128 128v256h1792V128zm1792 1280V512H128v896h256v293l293-293zm-640-768h512v640h-512zm128 512h256V768h-256zM256 768h896v128H256zm0 256h896v128H256z" />
                                    </svg>
                                </span>

                                <p>
                                    Blog
                                </p>
                            </a>
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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $orderCount }}</h3>

                                    <p>Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $productCount }}</h3>

                                    <p>Dogs added</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dog"></i>
                                </div>

                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner text-white">
                                    <h3>{{ $postCount }}</h3>

                                    <p>Articles added</p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M216 42H40a14 14 0 0 0-14 14v144a14 14 0 0 0 14 14h176a14 14 0 0 0 14-14V56a14 14 0 0 0-14-14m2 158a2 2 0 0 1-2 2H40a2 2 0 0 1-2-2V56a2 2 0 0 1 2-2h176a2 2 0 0 1 2 2ZM182 96a6 6 0 0 1-6 6H80a6 6 0 0 1 0-12h96a6 6 0 0 1 6 6m0 32a6 6 0 0 1-6 6H80a6 6 0 0 1 0-12h96a6 6 0 0 1 6 6m0 32a6 6 0 0 1-6 6H80a6 6 0 0 1 0-12h96a6 6 0 0 1 6 6" />
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">


                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">Latest Orders</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Buyer</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($newOrders as $newOrder)
                                                    <tr>
                                                        <td>{{ $newOrder->product->title }}</td>
                                                        <td><span
                                                                class="badge badge-success">{{ $newOrder->product->price }}$</span>
                                                        </td>
                                                        <td>
                                                            <div class="sparkbar" data-color="#00a65a"
                                                                data-height="20">
                                                                {{ $newOrder->user->first_name }}
                                                                {{ $newOrder->user->last_name }}</div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
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
                                            src="adminlte/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>
                                    @if (Auth::check())
                                        <h3 class="profile-username text-center">{{ Auth::user()->first_name }}
                                            {{ Auth::user()->last_name }}</h3>

                                        <p class="text-muted text-center"><span><i class="fas fa-user"></i></span>
                                            {{ Auth::user()->role }}</p>
                                        <p class="text-muted text-center"><span><i class="fas fa-envelope"></i></span>
                                            {{ Auth::user()->email }}</p>
                                    @endif


                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="#settings"
                                                data-toggle="tab">Settings</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class=" active tab-pane" id="settings">
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('profile.update') }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row">
                                                    <label for="first_name" class="col-sm-2 col-form-label">First
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="first_name"
                                                            placeholder="{{ Auth::user()->first_name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="last_name" class="col-sm-2 col-form-label">Last
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="last_name"
                                                            placeholder="{{ Auth::user()->last_name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-primary">Change</button>
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

        <!-- Content Wrapper. Contains page dogs -->
        <div class="content-section hidden-section content-wrapper" id="dogs-section">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dogs
                                <span>
                                    <a class="card-modal" data-toggle="modal" data-target="#staticBackdrop"
                                        style="text-decoration: none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 256 256">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="16">
                                                <circle cx="128" cy="128" r="112" />
                                                <path d="M 79.999992,128 H 176.0001" />
                                                <path d="m 128.00004,79.99995 v 96.0001" />
                                            </g>
                                        </svg>
                                    </a>
                                </span>
                            </h1>

                            <!-- Add Product Modal -->
                            <div class="modal fade" id="staticBackdrop">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Add
                                                a
                                                Dog</h1>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
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
                                                        <option value="" selected disabled>Choose
                                                            a
                                                            Gender
                                                        </option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select class="form-select mb-1" name="race_id" id="race_id">
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
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dogs</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                @if ($userProducts->isNotEmpty())
                    <div class="table-responsive">
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
                                                alt="{{ $product->title }} Image" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>
                                            <span class="limited-text"
                                                data-full-text="{{ $product->caracteristic }}">
                                                {{ strlen($product->caracteristic) > 50 ? substr($product->caracteristic, 0, 50) . '...' : $product->caracteristic }}
                                            </span>
                                            <button class="btn btn-sm toggle-more-btn text-primary">See more</button>
                                        </td>
                                        <td>{{ $product->age }}</td>
                                        <td>{{ $product->gender }}</td>
                                        <td>{{ $product->price }}$</td>
                                        <td>
                                            <div class="d-flex">
                                                <button class="btn btn-sm" data-toggle="modal"
                                                    data-target="#Backdrop{{ $product->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24">
                                                        <path fill="blue"
                                                            d="M3.548 20.938h16.9a.5.5 0 0 0 0-1h-16.9a.5.5 0 0 0 0 1M9.71 17.18a2.587 2.587 0 0 0 1.12-.65l9.54-9.54a1.75 1.75 0 0 0 0-2.47l-.94-.93a1.788 1.788 0 0 0-2.47 0l-9.54 9.53a2.473 2.473 0 0 0-.64 1.12L6.04 17a.737.737 0 0 0 .19.72a.767.767 0 0 0 .53.22Zm.41-1.36a1.468 1.468 0 0 1-.67.39l-.97.26l-1-1l.26-.97a1.521 1.521 0 0 1 .39-.67l.38-.37l1.99 1.99Zm1.09-1.08l-1.99-1.99l6.73-6.73l1.99 1.99Zm8.45-8.45L18.65 7.3l-1.99-1.99l1.01-1.02a.748.748 0 0 1 1.06 0l.93.94a.754.754 0 0 1 0 1.06" />
                                                    </svg>
                                                </button>

                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="Backdrop{{ $product->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5">
                                                                    Edit Your Product
                                                                </h1>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('update.product', ['id' => $product->id]) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="text-center mt-2">
                                                                        <img class="img-fluid w-50"
                                                                            src="{{ asset('storage/catalog/' . $product->photo) }}"
                                                                            alt="product photo">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Product Title</label>
                                                                        <input class="form-control mb-1"
                                                                            type="text" name="title"
                                                                            placeholder="{{ $product->title }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Caracteristics</label>

                                                                        <textarea class="form-control" placeholder="{{ $product->caracteristic }}" name="caracteristic"></textarea>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Age</label>
                                                                        <input class="form-control mb-1"
                                                                            type="text" name="age"
                                                                            placeholder="{{ $product->age }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Dog Gender</label>

                                                                        <select
                                                                            class="custom-select form-control-border"
                                                                            name="gender">
                                                                            <option value="{{ $product->gender }}"
                                                                                selected disabled>
                                                                                {{ $product->gender }}
                                                                            </option>
                                                                            <option value="Male">male</option>
                                                                            <option value="Female">female</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Dog Race</label>

                                                                        <select
                                                                            class="custom-select form-control-border"
                                                                            name="race_id" id="race_id">
                                                                            <option value="" selected disabled>
                                                                                Choose
                                                                                a
                                                                                Race</option>
                                                                            <option value="1">Labrador</option>
                                                                            <option value="2">Berger-Allemand
                                                                            </option>
                                                                            <option value="3">Beagle</option>
                                                                            <option value="4">Rottweiler</option>
                                                                            <option value="5">Pitbull</option>
                                                                            <option value="6">Chihuahua</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Price</label>

                                                                        <input class="form-control mb-1"
                                                                            type="text" name="price"
                                                                            placeholder="{{ $product->price }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Product Image</label>

                                                                        <div class="input-group">
                                                                            <div class="custom-file">
                                                                                <input type="file"
                                                                                    class="custom-file-input"
                                                                                    name="photo">
                                                                                <label class="custom-file-label">Choose
                                                                                    file</label>
                                                                            </div>

                                                                        </div>
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
                @else
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <p style="font-size: 40px">YOU HAVE NOT ADDED ANY DOG YET</p>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-5">
                            <img src="{{ asset('images/dashDog.svg') }}" alt="" width="100%">
                        </div>
                    </div>
                @endif

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content -->

        <!-- Content Wrapper. Contains page dogs -->
        <div class="content-section hidden-section content-wrapper" id="blog-section">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blog
                                <span class="m-2">
                                    <a class="card-modal" data-toggle="modal" data-target="#staticBackdrop2"
                                        style="text-decoration: none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 256 256">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="16">
                                                <circle cx="128" cy="128" r="112" />
                                                <path d="M 79.999992,128 H 176.0001" />
                                                <path d="m 128.00004,79.99995 v 96.0001" />
                                            </g>
                                        </svg>
                                    </a>
                                </span>
                            </h1>

                            <!-- Add Article Modal -->
                            <div class="modal fade" id="staticBackdrop2">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Add
                                                an
                                                Article</h1>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
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
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                @if ($userPosts->isNotEmpty())
                    <div class="row mt-2">
                        @foreach ($userPosts as $userPost)
                            <div class="col-lg-4 col-sm-6">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="border: none; position: relative;">
                                        <!-- Icône Delete -->
                                        <form action="{{ route('delete.post', ['id' => $userPost->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href=""
                                                style="position: absolute; top: 0; right: 0; z-index: 1;">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>

                                        </form>


                                        <!-- Icône Edit -->
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modal-default{{ $userPost->id }}"
                                            style="position: absolute; top: 0; right: 30px; z-index: 1;">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <div class="modal fade" id="modal-default{{ $userPost->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Update Your Post</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="text-center mt-2">
                                                        <img class="img-fluid w-50"
                                                            src="{{ asset('storage/blog/' . $userPost->photo) }}"
                                                            alt="article picture">
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('update.post', ['id' => $userPost->id]) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="">
                                                                        Article Title
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="{{ $userPost->title }}"
                                                                        name="title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Article Content</label>
                                                                    <textarea class="form-control" placeholder="{{ $userPost->content }}" name="content"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">Image</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input"
                                                                                id="exampleInputFile" name="photo">
                                                                            <label class="custom-file-label"
                                                                                for="exampleInputFile">Choose
                                                                                file</label>
                                                                        </div>


                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <!-- /.card-body -->

                                                            <div class="card-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                        <img src="{{ asset('storage/blog/' . $userPost->photo) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p><small>{{ $userPost->user->last_name }}
                                                    {{ $userPost->user->first_name }} -
                                                    {{ $userPost->created_at }}</small></p>
                                            <h5 class="card-title">{{ $userPost->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <p style="font-size: 40px">YOU HAVE NOT ADDED ANY ARTICLE YET</p>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-5">
                            <img src="{{ asset('images/dashBlog.svg') }}" alt="" width="100%">
                        </div>
                    </div>
                @endif
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
        <strong>Copyright &copy; 2024 <a href="/">PetConnect</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Dashboard</b>
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

                    // Retirer la classe "active" de tous les liens
                    sidebarLinks.forEach(function(otherLink) {
                        otherLink.classList.remove("active");
                    });

                    // Ajouter la classe "active" uniquement au lien cliqué
                    link.classList.add("active");

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

    <script>
        $(document).ready(function() {
            // Lorsque le bouton "Voir plus" est cliqué
            $('.toggle-more-btn').on('click', function() {
                // Trouvez le span parent
                var $limitedText = $(this).prev('.limited-text');

                // Basculer entre le texte complet et réduit
                if ($limitedText.text().length === $limitedText.data('full-text').length) {
                    // Si le texte est complet, réduisez-le
                    $limitedText.text($limitedText.text().substring(0, 50) + '...');
                    $(this).text('See more'); // Mettez à jour le texte du bouton
                } else {
                    // Sinon, affichez le texte complet
                    $limitedText.text($limitedText.data('full-text'));
                    $(this).text('Collapse'); // Mettez à jour le texte du bouton
                }
            });
        });
    </script>




</body>

</html>
