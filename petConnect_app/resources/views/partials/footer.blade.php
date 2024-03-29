<footer class="py-3" style="background-color: black">
    <div class="d-flex justify-content-center mt-2">
        <form action="{{ route('subscribe.newsletter') }}" method="post" class="w-50">
            @csrf
            <div class="row">
                <div class="col-5 text-white">
                    <p>Subscribe to our newsletter</p>
                </div>
                <div class="col-5">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-light">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-center">
        <hr class="my-4 w-75" style="color: white">
    </div>
    <p class="text-center text-white">Copyright 2023 - PetConnect Tous Droits Réservés</p>
</footer>
