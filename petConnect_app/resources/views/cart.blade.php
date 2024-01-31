<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Cart</title>
    <style>
        .cartStyle {
            border: 1px solid rgb(163, 154, 170);
            border-radius: 10px;
        }

        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .bg-grey {
            background-color: #eae8e8;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-grey {
                border-top-right-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-grey {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row">

                @if ($userOrders->isNotEmpty())

                    <section class="h-100 h-custom mb-1" style="background-color: #ffffff;">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12">
                                    <div class="card card-registration card-registration-2"
                                        style="border-radius: 15px;">
                                        <div class="card-body p-0">
                                            <div class="row g-0">
                                                <div class="col-lg-8">
                                                    <div class="p-5">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-5">
                                                            <h1 class="mb-0 text-black">Shopping Cart</h1>
                                                            <h6 class="mb-0 text-muted">
                                                                {{ app('App\Http\Controllers\CartController')->getNumberOfOrders() }}
                                                                items</h6>
                                                        </div>

                                                        <div
                                                            class="row mb-4 d-flex justify-content-between align-items-center">
                                                            <div class="col-md-5 col-lg-5 col-xl-5">
                                                                <h6>Product</h6>
                                                            </div>

                                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                                <h6>Quantity</h6>
                                                            </div>
                                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                                <h6>Price</h6>
                                                            </div>
                                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            </div>
                                                        </div>

                                                        <hr class="my-4">

                                                        @foreach ($userOrders as $order)
                                                            <div
                                                                class="row mb-4 d-flex justify-content-between align-items-center">
                                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                                    <img src="{{ asset('storage/catalog/' . $order->product->photo) }}"
                                                                        class="img-fluid rounded-3"
                                                                        alt="{{ $order->product->title }}">
                                                                </div>
                                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                                    <h6 class="text-muted">{{ $order->product->gender }}
                                                                    </h6>
                                                                    <h6 class="text-black mb-0">
                                                                        {{ $order->product->title }}</h6>
                                                                </div>
                                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                                                    {{-- <button class="btn btn-link px-2"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button> --}}

                                                                    <input data-order-id="{{ $order->id }}"
                                                                        id="form1" min="1" name="quantity"
                                                                        value="{{ $order->quantity }}" type="number"
                                                                        class="quantity-input form-control form-control-sm" />

                                                                    {{-- <button class="btn btn-link px-2"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                        <i class="fas fa-plus"></i>
                                                                    </button> --}}
                                                                </div>
                                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                                    <h6 class="mb-0">{{ $order->product->price }}$
                                                                    </h6>
                                                                </div>
                                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                                    <form
                                                                        action="{{ route('delete.order', ['id' => $order->id]) }}"
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
                                                            </div>

                                                            <hr class="my-4">
                                                        @endforeach

                                                        <div class="pt-5">
                                                            <h6 class="mb-0"><a href="{{ url('catalog') }}"
                                                                    class="text-body" style="text-decoration: none"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="2em" height="1.5em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="currentColor"
                                                                            d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20z" />
                                                                    </svg>Back
                                                                    to Catalog</a></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 bg-grey">
                                                    <div class="p-5">
                                                        <h3 class=" mb-5 mt-2 pt-1">Summary</h3>
                                                        <hr class="my-4">

                                                        <div class="d-flex justify-content-between mb-4">
                                                            <h5 class="text-uppercase">
                                                                {{ app('App\Http\Controllers\CartController')->getNumberOfOrders() }}
                                                                items
                                                            </h5>
                                                        </div>

                                                        <hr class="my-4">

                                                        @foreach ($userOrders as $order)
                                                            <p>
                                                                {{ $order->product->title }} X
                                                                {{ $order->quantity }}
                                                            </p>
                                                        @endforeach

                                                        <hr class="my-4">


                                                        <div class="d-flex justify-content-between mb-5">
                                                            <h5 class="text-uppercase">Total price</h5>
                                                            <h5>{{ $totalPrice }}$</h5>
                                                        </div>

                                                        <button type="button" class="btn btn-outline-dark btn-block"
                                                            data-mdb-ripple-color="dark">Pay Now</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @else
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <p style="font-size: 40px">YOUR CART IS EMPTY</p>
                            <a href="{{ url('catalog') }}" class="btn btn-dark">GO SHOPPING</a>
                        </div>

                    </div>
                    <div class="col-lg-6 mb-5">
                        <img src="{{ asset('images/emptyCart.png') }}" alt="" width="100%">
                    </div>
                @endif


            </div>
        </div>
        @include('partials.footer')
    </div>

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
            $('.quantity-input').on('change', function() {
                var orderId = $(this).data('order-id');
                var newQuantity = $(this).val();

                $.ajax({
                    url: '/update-quantity/' + orderId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        // La mise à jour a réussi
                        console.log('Quantity updated successfully');
                        location.reload();
                    },
                    error: function(error) {
                        // Gérer les erreurs ici
                        console.error('Error updating quantity', error);
                    }
                });
            });
        });
    </script>
</body>

</html>
