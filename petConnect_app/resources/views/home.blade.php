<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>PetConnect-Home</title>

    <style>
        .jumbotron {
            background-image: url("images/hqdogtheme.jpg");
            background-size: cover;
            color: white;
            height: 400px;
            border-radius: 10px;
        }

        h3,
        h5 {
            color: black !important;
        }

        .img-container {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 30%;
            right: 60%;
        }

        @media (max-width: 768px) {
            .overlay {
                top: 50%;
                right: 50%;
            }

            .overlay h2 {
                font-size: 15px;
            }
        }

        @media (max-width: 1200px) {
            .overlay {
                top: 50%;
                right: 40%;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-fluid">
        <!--Barre de Navigation-->
        @include('partials.navbar')

        <!--Jumbotron-->
        <div class="container">
            <div class="img-container">
                <img src="{{ asset('images/happydog1.jpg') }}" class="img-fluid" width="100%"
                    style="border-radius: 10px;" alt="...">
            </div>
            <div class="overlay">
                <h2 class="text-black">Build Unforgettable Bonds, <br>
                    Adopt Responsively
                </h2>
                <p class=" mt-4 d-none d-md-block text-black">PetConnect is your all-in-one canine <br>
                    destination. Find your perfect companion <br>
                    with breeds, advices, and qualities accessories. <br>
                    Simplified adoption for a life full of love.
                </p>
                <a class=" mt-4 mb-5 btn btn-outline-dark" href="catalog">Order Now</a>
            </div>
            <!--<h2 class="display-7 ">Build Unforgettable Bonds, <br>
                Adopt Responsively
            </h2>
            <p class=" mt-5 lead">PetConnect is your all-in-one canine <br>
                destination. Find your perfect companion <br>
                with breeds, advices, and qualities accessories. <br>
                Simplified adoption for a life full of love.
            </p>
            <a class=" mt-5 mb-5 btn btn-outline-light" href="catalog">Order Now</a>-->
        </div>

        <hr class="my-4">

        <!--Section(Why PetConnect?)-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h3 style="color: black">Why PetConnect?</h3>
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
                    <a class="btn btn-outline-dark mt-4" href="blog">Go to the blog</a>
                    <div class="mt-3">
                        <a href="" class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 128 128">
                                <rect width="118.35" height="118.35" x="4.83" y="4.83" fill="#3d5a98" rx="6.53"
                                    ry="6.53" />
                                <path fill="#fff"
                                    d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A126.56 126.56 0 0 0 91 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z" />
                            </svg>
                        </a>
                        <a href="" class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 256 209">
                                <path fill="#55acee"
                                    d="M256 25.45a105.04 105.04 0 0 1-30.166 8.27c10.845-6.5 19.172-16.793 23.093-29.057a105.183 105.183 0 0 1-33.351 12.745C205.995 7.201 192.346.822 177.239.822c-29.006 0-52.523 23.516-52.523 52.52c0 4.117.465 8.125 1.36 11.97c-43.65-2.191-82.35-23.1-108.255-54.876c-4.52 7.757-7.11 16.78-7.11 26.404c0 18.222 9.273 34.297 23.365 43.716a52.312 52.312 0 0 1-23.79-6.57c-.003.22-.003.44-.003.661c0 25.447 18.104 46.675 42.13 51.5a52.592 52.592 0 0 1-23.718.9c6.683 20.866 26.08 36.05 49.062 36.475c-17.975 14.086-40.622 22.483-65.228 22.483c-4.24 0-8.42-.249-12.529-.734c23.243 14.902 50.85 23.597 80.51 23.597c96.607 0 149.434-80.031 149.434-149.435c0-2.278-.05-4.543-.152-6.795A106.748 106.748 0 0 0 256 25.45" />
                            </svg>
                        </a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 256 256">
                                <g fill="none">
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram0)"
                                        rx="60" />
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram1)"
                                        rx="60" />
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
                <div class="col-lg-6 col-sm-6 d-none d-sm-block" style="background-image: url('{{ asset('images/valerie-elash-HNCX1RT1qRk-unsplash.jpg') }}'); background-size: cover; background-position: center; border-radius: 10px;">
                    
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!--Section(Services offering)-->
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3>Our Experts Are There For You</h3>
                    <p style="color: gray">Here are the services we offer</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 d-flex justify-content-center">
                            <div class="card h-50" style="width: 18rem; border:none">
                                <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                    <h5 class="card-title">Health Consultation</h5>
                                    <hr class="my-4">
                                    <img src="{{ asset('images/dconsul.png') }}" class="card-img-top" alt="...">

                                </div>
                                <p class="mt-2 card-text"><strong>20$</strong></p>

                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-dark">Order Now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3 d-flex justify-content-center">
                            <div class="card h-70" style="width: 18rem; border:none">
                                <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                    <h5 class="card-title">Dog Maintenance</h5>
                                    <hr class="my-4">
                                    <img src="{{ asset('images/dmaint.png') }}" class="card-img-top" alt="...">
                                </div>
                                <p class="mt-2 card-text"><strong>20$</strong></p>

                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-dark">Order Now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                            <div class="card h-50" style="width: 18rem; border:none">
                                <div class="card-body" style="background-color: rgb(236, 236, 236)">
                                    <h5 class="card-title">Dressage</h5>
                                    <hr class="my-4">
                                    <img src="{{ asset('images/dressage.png') }}" class="card-img-top"
                                        alt="...">

                                </div>
                                <p class="mt-2 card-text"><strong>20$</strong></p>

                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-dark">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <hr class="my-4">

        <!--Section(Dogs available for sale)-->
        <div class="container">
            <div class="row">
                <h3>Dogs Available For Sale</h3>
                <div class="row mt-4 text-center">
                    <div class="col-lg-4 col-sm-4 d-flex justify-content-center">
                        <div class="card" style="width: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/labrador.jpeg') }}" style="height: 230px"
                                    class="card-img-top" alt="...">
                                <p class="mt-2 card-text"><strong>Labrador</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 d-flex justify-content-center">
                        <div class="card" style="width: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/rottweiler.jpeg') }}" style="height: 230px"
                                    class="card-img-top" alt="...">
                                <p class="mt-2"><strong>Rottweiler</strong></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-sm-4 d-flex justify-content-center">
                        <div class="card" style="width: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/beagle.jpeg') }}" class="card-img-top"
                                    style="height: 230px" alt="...">
                                <p class="mt-2"><strong>Beagle</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 mt-2 d-flex justify-content-center">
                        <div class="card" style="width: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/chihuahua.jpeg') }}" class="card-img-top"
                                    style="height: 230px" alt="...">
                                <p class="mt-2"><strong>Chihuahua</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 mt-2 d-flex justify-content-center">
                        <div class="card" style="width: 300px; height: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/berger.jpeg') }}" class="card-img-top"
                                    style="height: 230px" alt="...">
                                <p class="mt-2"><strong>Berger Allemand</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 mt-2 d-flex justify-content-center">
                        <div class="card" style="width: 300px; border: none">
                            <div class="card-body">
                                <img src="{{ asset('images/pitbull.jpeg') }}" class="card-img-top"
                                    style="height: 230px" alt="...">
                                <p class="mt-2"><strong>Pitbull</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-dark mt-4" href="catalog">Go to the Catalog</a>
                    </div>
                </div>
            </div>
        </div>



        <hr class="my-4">

        <!--Section(Testimonials)-->
        <div class="container">
            <div class="row text-center mb-5">
                <h3>Testimonials</h3>
                <div class="row mt-5">
                    <div class="col-lg-2">
                        <a class="btn" onclick="changeTestimonial(-1)"><svg xmlns="http://www.w3.org/2000/svg"
                                width="40" height="40" viewBox="0 0 15 15">
                                <g transform="rotate(180 7.5 7.5)">
                                    <path fill="currentColor"
                                        d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414Z" />
                                </g>
                            </svg>
                        </a>

                    </div>
                    <div class="col-lg-8 testimonials-container">
                        <div class="testimonial" id="testimonial1">
                            <p>Transactions on the platform are really secure and the products are of good quality
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 128 128">
                                <path fill="#FFCA28"
                                    d="M110.03 87.19c4.66-1.24 6.22-8.41 5.95-11.93c-.39-5.17-2.73-10.14-6.39-10.72c1.33-1.23 2.5-4.68 1.99-10.23c-.47-5.07-4.57-9.23-10.07-9.54c0 0-6.45.04-18.49 2.95c-3.54.86-7.81 2.05-5.31-4.88c1.31-3.63 3.24-8.82 3.47-14.41c.43-10.68-3.14-23.04-12.06-24.18c-5.68-.73-9.34 1.85-9 6.89c.58 8.58 1.96 24.84-15.04 36.13c-7.15 4.75-8.62 11.81-13.99 14.03c-7.49 3.1-14.47 2.3-17.74 1.63a2.2 2.2 0 0 0-2.56 1.57c-5.88 20.13-1.08 36.79.77 41.99c.35.98 1.34 1.57 2.37 1.43c4.99-.68 8.91-.69 14.99-.12c5.84.55 9.08 4.9 13.46 7.79c9.89 7.26 24.31 6.73 37.84 6.4c2.91-.07 11.35 1.35 12.94 1.57c6.14.83 10-.39 11.67-5.36c1.79-5.32-.16-8.91-2.15-9.61c0 0 1.78.06 3.4-.07c3.81-.31 6.61-4.53 7.44-9.9c.7-4.48-.72-9.7-3.49-11.43z" />
                                <path fill="#FFB300"
                                    d="M88.13 85.24c-6.38-1.39-7.01-12.68-2.67-15.35c1.64-1.01 1.27-4.08 1.27-4.08c-2.09-.61-4.02-2.68-4.34-7.47c-.33-5 3.11-8.23 3.11-8.23s-5.03-.36-7.17 2.69c-2.69 3.83-4.58 14.5-6.47 19.37c-2.39 6.17-7.76 11.51-12.73 14.44c7.41 3.22 9.06 18.62 12.73 25.93c3.66 7.3 11.08 8.02 10.78 7.57c-1.46-2.21-1.54-6.92-1.17-8.44c1.41-5.86 5.93-5.34 5.93-5.34l.63-2.26s-3.28-2.73-3.28-7.73c0-5.72 3.15-7.63 3.15-7.63l.23-3.47z" />
                                <path fill="#EDA600"
                                    d="M31.74 68.41s1.25-2.58 5.34-8.68c1.74-2.6 4.55-5.95 8.86-9.63c4.45-3.79 7.85-8.49 8.17-11.25c-1.89 2.73-6.21 6.54-9.04 8.42c-6.95 4.62-13.98 14.03-13.33 21.14zm51.95 34.25c-1.41-.28-4.91-2.69-4.83-7.85c.06-4.42 2.77-5.43 4.07-5.94c0 0 13.06-.2 21.74-.06c2.82 0 5.5-1.63 5.5-1.63s-2.49-1.61-5.65-1.74c-14.26-.57-20.58-.3-22.81-.7c0 0-3.97-.14-4.36-7.08c-.41-7.29 5.27-7.22 6.69-7.49s15.47-2.32 19.06-2.88c4.47-.7 6.29-2.73 6.29-2.73s-.8-.27-4.87-.06c-3.62.18-13.07 1.06-20.47 1.4c-1.07.05-5.59-.69-6.08-5.01c-.27-2.36-.32-5.18.63-7.09c1.31-3.51 12.44-4.8 18.15-5.76c10.27-1.72 13.11 1.49 13.11 1.49c-2.22-5.41-8.98-5.68-15.75-4.56c-.75.12-11.93 1.6-14.35 1.99c-1.79.29-2.42-.99-.99-5.02c3.7-10.42 2.28-18.85 2.28-18.85s-.63 4.63-1.86 8.54c-1.23 3.91-3.08 7.93-5.38 11.81c-2.2 3.69-1.3 9.03-1.63 18.88s-5.16 17.4-12.69 22.2c-.76.34-1.68 1.54-.68 2.1c1.38.08 2.81-.43 4.08-.96c3.06-1.26 7.25-3.29 10.2-7.69c-.07 5.04 1.73 7.98 3.98 9.43c-1.81 1.5-2.64 3.48-2.63 8.18c.01 4.43 1.67 6.56 3.39 7.94c-1.87.86-3.57 2.44-4.18 5.21c-.73 3.28-.83 6.04.21 8.24c-.02.01-.05.02-.06.04c-5.04 4.01-19.41 1.36-24.73-1.41c-8.49-4.43-9.9-6.94-12.42-8.71a28.548 28.548 0 0 1-5.46-8.96c-.32 2.75-.13 4.84.63 6.91c-6-1.53-12.89 1.14-15.38 1.74c-2.64.63-2.96 1.49-2.96 1.49c11.62-.65 14.3-.49 17.54.35c5.83 1.51 7.57 8.14 20.98 11.91c6.44 1.81 17.33 2.47 30.86 2.79c5.49 1.14 12.23.7 12.23.7s-14.09-3.45-16.54-6.34c-.47-.55-2.76-4.06-.04-9.44c1.04-2.05 3.37-1.72 5.46-1.59c.74.05 12.38 1.38 15.46 1.92c4.93.87 7.85-.09 7.85-.09s-3.62-1.79-6.41-2.3c-3-.56-15.77-3.04-17.18-3.32z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 128 128">
                                <path fill="#FFCA28"
                                    d="M110.03 87.19c4.66-1.24 6.22-8.41 5.95-11.93c-.39-5.17-2.73-10.14-6.39-10.72c1.33-1.23 2.5-4.68 1.99-10.23c-.47-5.07-4.57-9.23-10.07-9.54c0 0-6.45.04-18.49 2.95c-3.54.86-7.81 2.05-5.31-4.88c1.31-3.63 3.24-8.82 3.47-14.41c.43-10.68-3.14-23.04-12.06-24.18c-5.68-.73-9.34 1.85-9 6.89c.58 8.58 1.96 24.84-15.04 36.13c-7.15 4.75-8.62 11.81-13.99 14.03c-7.49 3.1-14.47 2.3-17.74 1.63a2.2 2.2 0 0 0-2.56 1.57c-5.88 20.13-1.08 36.79.77 41.99c.35.98 1.34 1.57 2.37 1.43c4.99-.68 8.91-.69 14.99-.12c5.84.55 9.08 4.9 13.46 7.79c9.89 7.26 24.31 6.73 37.84 6.4c2.91-.07 11.35 1.35 12.94 1.57c6.14.83 10-.39 11.67-5.36c1.79-5.32-.16-8.91-2.15-9.61c0 0 1.78.06 3.4-.07c3.81-.31 6.61-4.53 7.44-9.9c.7-4.48-.72-9.7-3.49-11.43z" />
                                <path fill="#FFB300"
                                    d="M88.13 85.24c-6.38-1.39-7.01-12.68-2.67-15.35c1.64-1.01 1.27-4.08 1.27-4.08c-2.09-.61-4.02-2.68-4.34-7.47c-.33-5 3.11-8.23 3.11-8.23s-5.03-.36-7.17 2.69c-2.69 3.83-4.58 14.5-6.47 19.37c-2.39 6.17-7.76 11.51-12.73 14.44c7.41 3.22 9.06 18.62 12.73 25.93c3.66 7.3 11.08 8.02 10.78 7.57c-1.46-2.21-1.54-6.92-1.17-8.44c1.41-5.86 5.93-5.34 5.93-5.34l.63-2.26s-3.28-2.73-3.28-7.73c0-5.72 3.15-7.63 3.15-7.63l.23-3.47z" />
                                <path fill="#EDA600"
                                    d="M31.74 68.41s1.25-2.58 5.34-8.68c1.74-2.6 4.55-5.95 8.86-9.63c4.45-3.79 7.85-8.49 8.17-11.25c-1.89 2.73-6.21 6.54-9.04 8.42c-6.95 4.62-13.98 14.03-13.33 21.14zm51.95 34.25c-1.41-.28-4.91-2.69-4.83-7.85c.06-4.42 2.77-5.43 4.07-5.94c0 0 13.06-.2 21.74-.06c2.82 0 5.5-1.63 5.5-1.63s-2.49-1.61-5.65-1.74c-14.26-.57-20.58-.3-22.81-.7c0 0-3.97-.14-4.36-7.08c-.41-7.29 5.27-7.22 6.69-7.49s15.47-2.32 19.06-2.88c4.47-.7 6.29-2.73 6.29-2.73s-.8-.27-4.87-.06c-3.62.18-13.07 1.06-20.47 1.4c-1.07.05-5.59-.69-6.08-5.01c-.27-2.36-.32-5.18.63-7.09c1.31-3.51 12.44-4.8 18.15-5.76c10.27-1.72 13.11 1.49 13.11 1.49c-2.22-5.41-8.98-5.68-15.75-4.56c-.75.12-11.93 1.6-14.35 1.99c-1.79.29-2.42-.99-.99-5.02c3.7-10.42 2.28-18.85 2.28-18.85s-.63 4.63-1.86 8.54c-1.23 3.91-3.08 7.93-5.38 11.81c-2.2 3.69-1.3 9.03-1.63 18.88s-5.16 17.4-12.69 22.2c-.76.34-1.68 1.54-.68 2.1c1.38.08 2.81-.43 4.08-.96c3.06-1.26 7.25-3.29 10.2-7.69c-.07 5.04 1.73 7.98 3.98 9.43c-1.81 1.5-2.64 3.48-2.63 8.18c.01 4.43 1.67 6.56 3.39 7.94c-1.87.86-3.57 2.44-4.18 5.21c-.73 3.28-.83 6.04.21 8.24c-.02.01-.05.02-.06.04c-5.04 4.01-19.41 1.36-24.73-1.41c-8.49-4.43-9.9-6.94-12.42-8.71a28.548 28.548 0 0 1-5.46-8.96c-.32 2.75-.13 4.84.63 6.91c-6-1.53-12.89 1.14-15.38 1.74c-2.64.63-2.96 1.49-2.96 1.49c11.62-.65 14.3-.49 17.54.35c5.83 1.51 7.57 8.14 20.98 11.91c6.44 1.81 17.33 2.47 30.86 2.79c5.49 1.14 12.23.7 12.23.7s-14.09-3.45-16.54-6.34c-.47-.55-2.76-4.06-.04-9.44c1.04-2.05 3.37-1.72 5.46-1.59c.74.05 12.38 1.38 15.46 1.92c4.93.87 7.85-.09 7.85-.09s-3.62-1.79-6.41-2.3c-3-.56-15.77-3.04-17.18-3.32z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 128 128">
                                <path fill="#FFCA28"
                                    d="M110.03 87.19c4.66-1.24 6.22-8.41 5.95-11.93c-.39-5.17-2.73-10.14-6.39-10.72c1.33-1.23 2.5-4.68 1.99-10.23c-.47-5.07-4.57-9.23-10.07-9.54c0 0-6.45.04-18.49 2.95c-3.54.86-7.81 2.05-5.31-4.88c1.31-3.63 3.24-8.82 3.47-14.41c.43-10.68-3.14-23.04-12.06-24.18c-5.68-.73-9.34 1.85-9 6.89c.58 8.58 1.96 24.84-15.04 36.13c-7.15 4.75-8.62 11.81-13.99 14.03c-7.49 3.1-14.47 2.3-17.74 1.63a2.2 2.2 0 0 0-2.56 1.57c-5.88 20.13-1.08 36.79.77 41.99c.35.98 1.34 1.57 2.37 1.43c4.99-.68 8.91-.69 14.99-.12c5.84.55 9.08 4.9 13.46 7.79c9.89 7.26 24.31 6.73 37.84 6.4c2.91-.07 11.35 1.35 12.94 1.57c6.14.83 10-.39 11.67-5.36c1.79-5.32-.16-8.91-2.15-9.61c0 0 1.78.06 3.4-.07c3.81-.31 6.61-4.53 7.44-9.9c.7-4.48-.72-9.7-3.49-11.43z" />
                                <path fill="#FFB300"
                                    d="M88.13 85.24c-6.38-1.39-7.01-12.68-2.67-15.35c1.64-1.01 1.27-4.08 1.27-4.08c-2.09-.61-4.02-2.68-4.34-7.47c-.33-5 3.11-8.23 3.11-8.23s-5.03-.36-7.17 2.69c-2.69 3.83-4.58 14.5-6.47 19.37c-2.39 6.17-7.76 11.51-12.73 14.44c7.41 3.22 9.06 18.62 12.73 25.93c3.66 7.3 11.08 8.02 10.78 7.57c-1.46-2.21-1.54-6.92-1.17-8.44c1.41-5.86 5.93-5.34 5.93-5.34l.63-2.26s-3.28-2.73-3.28-7.73c0-5.72 3.15-7.63 3.15-7.63l.23-3.47z" />
                                <path fill="#EDA600"
                                    d="M31.74 68.41s1.25-2.58 5.34-8.68c1.74-2.6 4.55-5.95 8.86-9.63c4.45-3.79 7.85-8.49 8.17-11.25c-1.89 2.73-6.21 6.54-9.04 8.42c-6.95 4.62-13.98 14.03-13.33 21.14zm51.95 34.25c-1.41-.28-4.91-2.69-4.83-7.85c.06-4.42 2.77-5.43 4.07-5.94c0 0 13.06-.2 21.74-.06c2.82 0 5.5-1.63 5.5-1.63s-2.49-1.61-5.65-1.74c-14.26-.57-20.58-.3-22.81-.7c0 0-3.97-.14-4.36-7.08c-.41-7.29 5.27-7.22 6.69-7.49s15.47-2.32 19.06-2.88c4.47-.7 6.29-2.73 6.29-2.73s-.8-.27-4.87-.06c-3.62.18-13.07 1.06-20.47 1.4c-1.07.05-5.59-.69-6.08-5.01c-.27-2.36-.32-5.18.63-7.09c1.31-3.51 12.44-4.8 18.15-5.76c10.27-1.72 13.11 1.49 13.11 1.49c-2.22-5.41-8.98-5.68-15.75-4.56c-.75.12-11.93 1.6-14.35 1.99c-1.79.29-2.42-.99-.99-5.02c3.7-10.42 2.28-18.85 2.28-18.85s-.63 4.63-1.86 8.54c-1.23 3.91-3.08 7.93-5.38 11.81c-2.2 3.69-1.3 9.03-1.63 18.88s-5.16 17.4-12.69 22.2c-.76.34-1.68 1.54-.68 2.1c1.38.08 2.81-.43 4.08-.96c3.06-1.26 7.25-3.29 10.2-7.69c-.07 5.04 1.73 7.98 3.98 9.43c-1.81 1.5-2.64 3.48-2.63 8.18c.01 4.43 1.67 6.56 3.39 7.94c-1.87.86-3.57 2.44-4.18 5.21c-.73 3.28-.83 6.04.21 8.24c-.02.01-.05.02-.06.04c-5.04 4.01-19.41 1.36-24.73-1.41c-8.49-4.43-9.9-6.94-12.42-8.71a28.548 28.548 0 0 1-5.46-8.96c-.32 2.75-.13 4.84.63 6.91c-6-1.53-12.89 1.14-15.38 1.74c-2.64.63-2.96 1.49-2.96 1.49c11.62-.65 14.3-.49 17.54.35c5.83 1.51 7.57 8.14 20.98 11.91c6.44 1.81 17.33 2.47 30.86 2.79c5.49 1.14 12.23.7 12.23.7s-14.09-3.45-16.54-6.34c-.47-.55-2.76-4.06-.04-9.44c1.04-2.05 3.37-1.72 5.46-1.59c.74.05 12.38 1.38 15.46 1.92c4.93.87 7.85-.09 7.85-.09s-3.62-1.79-6.41-2.3c-3-.56-15.77-3.04-17.18-3.32z" />
                            </svg>
                            <div class="d-flex justify-content-center">
                                <hr class="my-2 w-25">
                            </div>
                            <p>Mr Alex SODJINOU</p>
                        </div>
                        <div class="testimonial" id="testimonial2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur tenetur
                                quas
                                aliquam labore, quibusdam perferendis ducimus libero ad necessitatibu </p>
                            <div class="d-flex justify-content-center">
                                <hr class="my-2 w-25">
                            </div>
                            <p>Mr Robert Lebron</p>
                        </div>
                        <div class="testimonial" id="testimonial3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.rferendis ducimus libero ad
                                necessitatibu </p>
                            <div class="d-flex justify-content-center">
                                <hr class="my-2 w-25">
                            </div>
                            <p>Mr Lebron</p>
                        </div>
                        <div class="testimonial" id="testimonial4">
                            <p>Nesciunt aspernatur tenetur quas aliquam labore, quibusdam perferendis ducimus libero
                                ad
                                necessitatibu </p>
                            <div class="d-flex justify-content-center">
                                <hr class="my-2 w-25">
                            </div>
                            <p>Mr Robert</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn" onclick="changeTestimonial(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414Z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>


        <!--Footer-->
        @include('partials.footer')
    </div>

</body>

<script src="{{ asset('js/script.js') }}"></script>
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

</html>
