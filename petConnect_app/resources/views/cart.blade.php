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
    </style>

</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row mt-5">
                <h2>Cart</h2>
                <hr />
                @if ($userOrders->isNotEmpty())
                    @foreach ($userOrders as $order)
                        <div class="col-lg-4 mb-5 cartStyle">
                            <div class="row">
                                <div class="col-lg-4"
                                    style="border-radius: 10px; background-image: url('{{ asset('storage/catalog/' . $order->product->photo) }}'); background-size: cover; background-position: center; height: 250px; width: 100%;">
                                </div>
                                <div class="col-lg-8 mt-3">
                                    <h3>{{ $order->product->title }}</h3>
                                    <p>${{ $order->product->price }} <span class="text-success m-3">in Stock</span></p>
                                    <div class="form-outline" style="width: 10rem;">
                                        <input min="1" max="5" type="number" id="typeNumber"
                                            class="form-control" placeholder="Quantity" />
                                    </div>
                                    <div class="d-flex mt-2 mb-3">
                                        <a href="" class="btn btn-outline-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20">
                                                <path fill="green"
                                                    d="M11.67 8.537a.3.3 0 0 0-.302.296v2.212a.3.3 0 0 0 .303.296h6.663a.3.3 0 0 0 .303-.296V8.833a.3.3 0 0 0-.303-.296zm4.086-7.036c.922.044 1.585.226 2.005.612c.415.382.628.935.67 1.667v2.097a.674.674 0 0 1-.681.666a.674.674 0 0 1-.682-.666l.001-2.059c-.022-.38-.113-.616-.243-.736c-.126-.116-.51-.22-1.103-.25H2.647c-.537.02-.886.122-1.055.267c-.13.111-.228.417-.229.946l-.003 11.77c.05.514.163.857.308 1.028c.11.13.451.26.953.324h13.116c.614.012.976-.08 1.098-.203c.135-.137.233-.497.233-1.086v-2.045c0-.367.305-.666.682-.666c.376 0 .681.299.681.666v2.045c0 .9-.184 1.573-.615 2.01c-.444.45-1.15.63-2.093.61L2.54 18.495c-.897-.104-1.54-.35-1.923-.803c-.347-.41-.54-.995-.617-1.813V4.044c.002-.876.212-1.535.694-1.947c.442-.38 1.08-.565 1.927-.597zm2.578 5.704c.92 0 1.666.729 1.666 1.628v2.212c0 .899-.746 1.628-1.666 1.628h-6.663c-.92 0-1.666-.73-1.666-1.628V8.833c0-.899.746-1.628 1.666-1.628zm-4.997 1.94c-.46 0-.833.36-.833.803c0 .444.373.803.833.803c.46 0 .833-.36.833-.803c0-.444-.373-.804-.833-.804" />
                                            </svg>
                                            Pay Now
                                        </a>

                                        <form action="{{ route('delete.order', ['id' => $order->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="20" height="20" viewBox="0 0 24 24">
                                                    <g fill="none">
                                                        <path
                                                            d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="red"
                                                            d="M20 5a1 1 0 1 1 0 2h-1l-.003.071l-.933 13.071A2 2 0 0 1 16.069 22H7.93a2 2 0 0 1-1.995-1.858l-.933-13.07A1.017 1.017 0 0 1 5 7H4a1 1 0 0 1 0-2zm-6-3a1 1 0 1 1 0 2h-4a1 1 0 0 1 0-2z" />
                                                    </g>
                                                </svg>
                                                Delete

                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
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

</body>

</html>
