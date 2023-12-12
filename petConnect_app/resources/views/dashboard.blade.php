<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/js/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')

        <div class="row">
            @auth
            <h1>Welcome {{ $userData['first_name'] }} </h1>            
            @endauth

            <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="text" name="caracteristic" placeholder="Caracteristic du chien">
                </div>
                <div>
                    <input type="text" name="age" placeholder="Âge du chien">
                </div>
                <div>
                    <input type="text" name="gender" placeholder="Sexe du chien">
                </div>
                <div>
                    <input type="text" name="race_id" placeholder="ID de la race">
                </div>
                <div>
                    <input type="text" name="price" placeholder="Prix du chien">
                </div>
                <div>
                    <label class="form-label" for="customFile">Photo</label>
                    <input type="file" class="form-control" name="photo" id="customFile" />
                </div>
                <div>
                    <input type="text" name="user_id" placeholder="ID de l'utilisateur">
                </div>
                <button class="btn btn-dark" type="submit">Ajouter un chien</button>
            </form>

        </div>

        @include('partials.footer')

    </div>
</body>

</html>
