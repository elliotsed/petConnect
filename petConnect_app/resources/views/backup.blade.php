@include('partials.navbar')

<div class="row">
    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->first_name }}!</p>
    @endif


    <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Formulaire Pour Ajout de Chien Pour le Catalogue</h1>

        <div>
            <input type="text" name="caracteristic" placeholder="Caracteristic du chien">
        </div>
        <div>
            <input type="text" name="age" placeholder="Âge du chien">
        </div>
        <div>
            <input type="text" name="title" placeholder="Titre du produit">
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

<div class="row mt-5">
    <h1>Formulaire Pour Ajout de Post Pour le Blog</h1>
    <form action="{{ route('add.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input class="form-control" type="text" name="title" placeholder="Titre du post">
        </div>
        <div>
            <textarea class="form-control" name="content" placeholder="contenu du post"></textarea>
        </div>
        <div>
            <label class="form-label" for="customFile">Photo</label>
            <input type="file" class="form-control" name="photo" id="customFile" />
        </div>

        <button class="btn btn-dark" type="submit">Ajouter un chien</button>
    </form>

</div>

@include('partials.footer')

</div>