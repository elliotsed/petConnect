<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Detail</title>
    <style>
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

        .image-container img:hover {
            opacity: 0.3;
            /* Opacité de l'image réduite au survol*/

        }

        .image-container:hover .overlay {
            opacity: 1;
            /* Affichage de l'overlay au survol */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row mt-5">
                <div class="card mb-3" style="border: none">
                    <div class="row g-0">
                        <div class="col-lg-8 col-md-8">
                            <img src="{{ asset('images/catalog/puppylab.jpg') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-body">
                                <h4 class="card-title">BABY LABRADOR</h4>
                                <p class="card-text"><strong>PRICE</strong><br>
                                    <span class="text-body-secondary">300$</span>
                                </p>
                                <p class="card-text"><strong>CARACTERISTICS</strong><br>
                                    <span class="text-body-secondary">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit. Quas, illo laborum?</span>
                                </p>
                                <p class="card-text"><strong>AGE</strong><br>
                                    <span class="text-body-secondary">2months</span>
                                </p>
                                <p class="card-text"><strong>GENDER</strong><br>
                                    <span class="text-body-secondary">Female</span>
                                </p>
                                <a class="btn btn-outline-dark" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="d-flex justify-content-start"><strong>YOU MAY ALSO WANT TO SEE</strong></p>
                        </div>
                        <div class="col-lg-4">

                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 36 36">
                                        <g transform="rotate(-90 18 18)">
                                            <path fill="currentColor"
                                                d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2Zm8 15.57a1.43 1.43 0 0 1-2 0L19.4 13v14.14a1.4 1.4 0 0 1-2.8 0v-14l-4.43 4.43a1.4 1.4 0 0 1-2-2l7.91-7.87L26 15.59a1.4 1.4 0 0 1 0 1.98Z"
                                                class="clr-i-solid clr-i-solid-path-1" />
                                            <path fill="none" d="M0 0h36v36H0z" />
                                        </g>
                                    </svg>
                                </a>
                                <a href="#" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 36 36">
                                        <g transform="rotate(90 18 18)">
                                            <path fill="currentColor"
                                                d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2Zm8 15.57a1.43 1.43 0 0 1-2 0L19.4 13v14.14a1.4 1.4 0 0 1-2.8 0v-14l-4.43 4.43a1.4 1.4 0 0 1-2-2l7.91-7.87L26 15.59a1.4 1.4 0 0 1 0 1.98Z"
                                                class="clr-i-solid clr-i-solid-path-1" />
                                            <path fill="none" d="M0 0h36v36H0z" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <div class="card" style="width: 18rem; border: none;">
                                    <a href="#">
                                        <div class="image-container">
                                            <img src="{{ asset('images/catalog/Chiotlab.webp') }}" style="height: 150px"
                                                class="card-img-top" alt="...">
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
                                        <p><small>Charlie <br> 350$</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <div class="card" style="width: 18rem; border: none;">
                                    <a href="">
                                        <div class="image-container">
                                            <img src="{{ asset('images/catalog/adultlab1.jpg') }}" style="height: 150px"
                                                class="card-img-top" alt="...">
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
                                        <p><small>Adult Labrador <br> 500$</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="d-flex justify-content-center">
                                <div class="card" style="width: 18rem; border: none;">
                                    <a href="">
                                        <div class="image-container">
                                            <img src="{{ asset('images/catalog/puplabblack.jpg') }}"
                                                style="height: 150px" class="card-img-top" alt="...">
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
                                        <p><small>Baby Black Labrador <br> 300$</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Dans votre vue -->
                <form action="{{ route('add.product') }}" method="post">
                    @csrf
                    <input type="text" name="caracteristic" placeholder="Description du chien">
                    <input type="text" name="age" placeholder="Âge du chien">
                    <input type="text" name="gender" placeholder="Genre du chien">
                    <input type="text" name="race_id" placeholder="ID de la race">
                    <input type="text" name="photo" placeholder="Chemin de la photo">
                    <input type="text" name="user_id" placeholder="ID de l'utilisateur">
                    <button type="submit">Ajouter un chien</button>
                </form>
    
            </div>
        </div>

        

        @include('partials.footer')
    </div>
</body>

</html>
