<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Register</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height: 100vh">
            <div class="col-lg-6" style="background-color: rgb(134, 134, 229)">
                <div class="row mt-5 d-flex justify-content-center">
                    <img src="{{ asset('images/undraw_mobile_login_re_9ntv.svg') }}" style="width: 500px">
                </div>
                <div class="row mt-5">
                    <h1 class="text-white text-center">Welcome To <br> PetConnect</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row mt-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1" />
                        </svg> <a href="" style="text-decoration: none">Home</a>
                    </div>

                    <h2 class="mt-3">Create Your Account</h2>
                    <form action="">
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label"><strong>First name</strong></label>
                            <input type="text" class="form-control" id="" placeholder="First name"
                                name="">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label"><strong>Last name</strong></label>
                            <input type="text" class="form-control" id="" placeholder="Last name"
                                name="">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label"><strong>Email address</strong></label>
                            <input type="email" class="form-control" id="" placeholder="example@gmail.com"
                                name="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><strong>Password</strong></label>
                            <input type="password" class="form-control" id="" placeholder="Enter password"
                                name="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><strong>Password confirmation</strong></label>
                            <input type="password" class="form-control" id="" placeholder="Confirm password"
                                name="">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn text-white" style="background-color: rgb(134, 134, 229) !important; width: 150px">Create</button>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <p>Already have an account? <a href="" style="text-decoration: none">Login here</a></p>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
