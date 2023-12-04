<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-Post</title>
</head>

<body>
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="container">
            <div class="row text-center mt-5">
                <h2 style="color: black">Why You Should Adopt A Dog</h2>
                <p><small>KOUDEBI Nikos - 20 Nov 2023</small></p>
                <img src="{{ asset('images/blog/imgblog00.jpg') }}">
                <p class="mt-5 mb-5 text-start">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet tempus dolor, quis dapibus
                    lectus.
                    Proin ante purus, lobortis sed eleifend vitae, fermentum et ex. Morbi elementum pretium rutrum. Sed
                    imperdiet congue nulla. Etiam imperdiet turpis nisi, maximus ornare ante congue non. Etiam a luctus
                    lectus. Donec laoreet lorem cursus, lobortis ante at, fringilla est. Nulla volutpat porttitor sapien
                    nec
                    efficitur. Nunc eget consectetur magna. Etiam ultrices massa quis eleifend interdum. Orci varius
                    natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris tincidunt euismod ipsum,
                    eleifend venenatis quam.

                    Suspendisse ac urna massa. Quisque interdum, ligula eget vestibulum sodales, diam ante ultricies
                    ligula,
                    eget iaculis urna quam in eros. Praesent dignissim vulputate efficitur. Aenean vitae neque quis
                    sapien
                    vehicula pellentesque. Vestibulum elit leo, fringilla sed neque at, lacinia elementum ex. Sed ligula
                    sapien, pellentesque at tincidunt in, lacinia id nisl. Etiam bibendum urna sed ante finibus
                    elementum.
                    Vivamus lorem enim, congue a lobortis vitae, accumsan in nulla. Mauris euismod maximus efficitur. In
                    arcu sem, condimentum eu placerat ut, porttitor eget ipsum. Donec commodo gravida dui, ullamcorper
                    luctus justo consequat nec. Donec fermentum tempor nisl et tristique. Phasellus iaculis pellentesque
                    ipsum, at viverra mauris vulputate vitae. Nullam eleifend semper neque ut efficitur.

                    Pellentesque id convallis odio. In elit urna, eleifend eu lectus eu, pulvinar vulputate libero.
                    Aliquam
                    nec dolor sed ex lacinia egestas. Aliquam erat volutpat. Morbi enim nunc, eleifend vitae varius et,
                    malesuada nec tortor. Nulla sit amet nisl interdum, pellentesque lacus ac, ornare orci. Nunc ligula
                    arcu, tempor a lobortis id, suscipit sed lorem. Pellentesque eget diam eget dolor gravida tincidunt
                    at
                    in mauris. Proin vel massa eget dolor aliquam lobortis et eu dui. Vivamus malesuada dui lectus, in
                    condimentum massa elementum eget. Pellentesque non porttitor ex. Praesent ac feugiat velit, vitae
                    gravida lacus. Mauris vestibulum, dolor in vulputate interdum, mi massa lobortis neque, et lobortis
                    lorem mi nec enim.

                    Aliquam vel nulla quam. Mauris ut maximus mauris. Vestibulum iaculis tempor ante, vel venenatis
                    justo
                    pretium et. Nullam lacinia felis et justo tempor, vel luctus velit aliquet. Sed sed sodales lacus,
                    vel
                    congue erat. Nulla sed erat a elit sodales pretium id a lorem. Fusce eleifend ultricies congue.
                    Aenean
                    congue porttitor tellus sit amet euismod. Morbi vulputate, purus sit amet congue condimentum, ipsum
                    odio
                    cursus odio, vel dapibus nulla nisi quis nisl. Suspendisse justo sem, ullamcorper id nisi sed,
                    egestas
                    consectetur est. Sed malesuada leo tellus, eget varius lacus lobortis porta. Nunc massa risus,
                    sodales
                    accumsan auctor vel, finibus nec nibh.

                    Proin viverra sem id sem suscipit, posuere pretium metus tempus. Nulla pretium sodales fringilla.
                    Suspendisse porta ac dolor eget ultrices. Vivamus porttitor imperdiet est vitae aliquam. Morbi
                    ornare
                    tortor urna, nec volutpat lectus semper rhoncus. Integer rhoncus vitae magna quis pellentesque. Ut
                    bibendum rhoncus tellus vel luctus. Donec at ornare ex. Donec vulputate ex nulla, sit amet consequat
                    lectus porttitor et. Etiam purus nunc, gravida non velit quis, tristique imperdiet massa. Vivamus
                    fermentum vehicula dui, sed congue purus placerat et. Duis bibendum scelerisque placerat. Sed eu leo
                    tempus, pretium turpis sit amet, hendrerit libero. Suspendisse vehicula nunc eget rhoncus sagittis.
                    Morbi vehicula accumsan elit id dapibus.
                </p>

                <!--Pagination-->
                <div class=" mb-5 d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link text-dark" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g transform="rotate(-90 12 12)">
                                            <path fill="currentColor"
                                                d="m17.71 11.29l-5-5a1 1 0 0 0-.33-.21a1 1 0 0 0-.76 0a1 1 0 0 0-.33.21l-5 5a1 1 0 0 0 1.42 1.42L11 9.41V17a1 1 0 0 0 2 0V9.41l3.29 3.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z" />
                                        </g>
                                    </svg></a></li>

                            <li class="page-item"><a class="page-link text-dark" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g transform="rotate(90 12 12)">
                                            <path fill="currentColor"
                                                d="m17.71 11.29l-5-5a1 1 0 0 0-.33-.21a1 1 0 0 0-.76 0a1 1 0 0 0-.33.21l-5 5a1 1 0 0 0 1.42 1.42L11 9.41V17a1 1 0 0 0 2 0V9.41l3.29 3.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z" />
                                        </g>
                                    </svg></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div>
</body>

</html>
