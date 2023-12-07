<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="row">
        <form action="{{ route('add.product') }}" method="post">
            @csrf
            <div>
                <label for="">Caracteristic</label>
                <input type="text" name="caracteristic" placeholder="Description du chien">
            </div>
            <div>
                <label for="">Âge</label>
                <input type="text" name="age" placeholder="Âge du chien">
            </div>
            <div>
                <label for="">Sexe</label>
                <input type="text" name="gender" placeholder="Genre du chien">
            </div>
            <div>
                <label for="">Âge</label>
                <input type="text" name="race_id" placeholder="ID de la race">
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
</body>

</html>
