<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Home</title>

    <style>
        .jumbotron {
            background-image: url("images/hqdogtheme.jpg");
            background-size: cover;
            color: white;
            height: 400px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!--Barre de Navigation-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <div class="navbar-brand">
                    <img src="{{ asset('images/logoPet.png') }}" alt="Logo" width="150" height="150"
                        class="d-inline-block align-text-top">
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active me-4" aria-current="page" href="#">Home</a>
                        <a class="nav-link me-4" href="#">About</a>
                        <a class="nav-link me-4" href="#">Blog</a>
                        <a class="nav-link" href="#">Catalog</a>
                    </div>
                </div>
                <form class="d-flex">
                    <button class="btn btn-sm btn-outline-dark me-2" type="button">Register</button>
                    <button class="btn btn-sm btn-outline-dark" type="button">Login</button>
                </form>
            </div>
        </nav>

        <!--Jumbotron-->
        <div class="jumbotron container">
            <h3 class="display-7 ">Build Unforgettable Bonds, <br>
                Adopt Responsively
            </h3>
            <p class=" mt-5 lead">PetConnect is your all-in-one canine <br>
                destination. Find your perfect companion <br>
                with breeds, advices, and qualities accessories. <br>
                Simplified adoption for a life full of love.
            </p>
            <a class=" mt-5 mb-5 btn btn-light btn-lg" href="#" role="button">Order Now</a>
        </div>

        <hr class="my-4">

        <!--Section(Why PetConnect?)-->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Why PetConnect?</h3>
                <div class="mt-4">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                            <path fill="gray" d="M232 128A104 104 0 1 1 128 24a104.13 104.13 0 0 1 104 104Z" />
                        </svg> Responsible adoption, assured well-being.</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                            <path fill="gray" d="M232 128A104 104 0 1 1 128 24a104.13 104.13 0 0 1 104 104Z" />
                        </svg> Diversity of breeds, comprehensive informaton, simplified management.</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                            <path fill="gray" d="M232 128A104 104 0 1 1 128 24a104.13 104.13 0 0 1 104 104Z" />
                        </svg> Secured payements, reinforced trust, fair transactions.</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                            <path fill="gray" d="M232 128A104 104 0 1 1 128 24a104.13 104.13 0 0 1 104 104Z" />
                        </svg> Engaged community, expert advice, integrated veterinary network.</p>
                </div>
                <button class="btn btn-outline-dark mt-4" type="button">Go to the blog</button>
                <div class="mt-3">
                    <a href="" class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" viewBox="0 0 128 128">
                            <path
                                d="M75.916 54.2L122.542 0h-11.05L71.008 47.06L38.672 0H1.376l48.898 71.164L1.376 128h11.05L55.18 78.303L89.328 128h37.296L75.913 54.2ZM60.782 71.79l-4.955-7.086l-39.42-56.386h16.972L65.19 53.824l4.954 7.086l41.353 59.15h-16.97L60.782 71.793Z" />
                        </svg>
                    </a>
                    <a href="" class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" viewBox="0 0 128 128">
                            <rect width="118.35" height="118.35" x="4.83" y="4.83" fill="#3d5a98" rx="6.53"
                                ry="6.53" />
                            <path fill="#fff"
                                d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A126.56 126.56 0 0 0 91 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z" />
                        </svg>
                    </a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 256 256">
                            <g fill="none">
                                <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                <path fill="#fff"
                                    d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z" />
                                <defs>
                                    <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1"
                                        gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FD5" />
                                        <stop offset=".1" stop-color="#FD5" />
                                        <stop offset=".5" stop-color="#FF543E" />
                                        <stop offset="1" stop-color="#C837AB" />
                                    </radialGradient>
                                    <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1"
                                        gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3771C8" />
                                        <stop offset=".128" stop-color="#3771C8" />
                                        <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex justify-content-center">
                <img src="{{ asset('images/valerie-elash-HNCX1RT1qRk-unsplash.jpg') }}"
                    style="width: 300px; height: 300px">
            </div>
        </div>

        <hr class="my-4">

        <!--Section(Services offering)-->
        <div class="row">
            <div class="row text-center">
                <h3>Our Experts Are There For You</h3>
                <p style="color: gray">Here are the services we offer</p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                <h5 class="card-title">Health Consultation</h5>
                                <hr class="my-4">
                                <img src="{{ asset('images/dconsul.png') }}" class="card-img-top" alt="...">
                                <hr class="my-4">
                                <p class="mt-2 card-text"><strong>20$</strong></p>
                                <a href="#" class="btn btn-outline-dark">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                <h5 class="card-title">Dog Maintenance</h5>
                                <hr class="my-4">
                                <img src="{{ asset('images/dmaint.png') }}" class="card-img-top mt-4" alt="...">
                                <hr class="my-4">
                                <p class="mt-2 card-text"><strong>30$/hour</strong></p>
                                <a href="#" class="btn btn-outline-dark">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                <h5 class="card-title">Dressage</h5>
                                <hr class="my-4">
                                <img src="{{ asset('images/dressage.png') }}" class="card-img-top" alt="...">
                                <hr class="my-4">
                                <p class="mt-2 card-text"><strong>30$/hour</strong></p>
                                <a href="#" class="btn btn-outline-dark">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!--Section(Dogs available for sale)-->
        <div class="row">
            <h3>Dogs Available For Sale</h3>
        </div>



    </div>
</body>

</html>
