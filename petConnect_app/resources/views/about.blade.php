<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.css', 'resources/js/app.js'])
    <title>PetConnect-About</title>
</head>

<body>
    <div class="container">
        @include('partials.navbar')
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-6">
                <h2 class="text-primary">OUR MISSION</h2>
                <p>At PetConnect, our mission is to promote responsible adoption, <br>
                    ensuring the well-being of each animal, educating potential owners, <br>
                    and fostering a secure and inclusive community where love for dogs meets responsibility
                </p>
            </div>
            <div class="col-lg-6 col-sm-6">
                <img src="{{ asset('images/undraw_dog_c7i6.svg') }}" width="350" alt="">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-sm-6">
                <img src="{{ asset('images/undraw_good_doggy_re_eet7(1).svg') }}" width="350" alt="">
            </div>
            <div class="col-lg-6 col-sm-6">
                <h2 class="text-primary">OUR VISION</h2>
                <p>Our vision is a world where every pet discovers a caring home. <br>
                    Adoption is synonymous with responsibility,
                    and our community thrives with a shared commitment to animal weel-being, fostering enduring
                    connections among owners, breeders, and their beloved companions.
                </p>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-lg-6 col-sm-6">
                <h2 class="text-primary">CONTACT US</h2>
                <p>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 256 258">
                            <defs>
                                <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%"
                                    y2="0%">
                                    <stop offset="0%" stop-color="#1FAF38" />
                                    <stop offset="100%" stop-color="#60D669" />
                                </linearGradient>
                                <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%"
                                    y2="0%">
                                    <stop offset="0%" stop-color="#F9F9F9" />
                                    <stop offset="100%" stop-color="#FFF" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#logosWhatsappIcon0)"
                                d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a122.994 122.994 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                            <path fill="url(#logosWhatsappIcon1)"
                                d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416Zm40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513l10.706-39.082Z" />
                            <path fill="#FFF"
                                d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561c0 15.67 11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716c-3.186-1.593-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                        </svg></a> +000 00 00 00 00
                </p>
                <p>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="blue"
                                d="m16.484 11.976l6.151-5.344v10.627zm-7.926.905l2.16 1.875c.339.288.781.462 1.264.462h.017h-.001h.014c.484 0 .926-.175 1.269-.465l-.003.002l2.16-1.875l6.566 5.639H1.995zM1.986 5.365h20.03l-9.621 8.356a.612.612 0 0 1-.38.132h-.014h.001h-.014a.61.61 0 0 1-.381-.133l.001.001zm-.621 1.266l6.15 5.344l-6.15 5.28zm21.6-2.441c-.24-.12-.522-.19-.821-.19H1.859a1.87 1.87 0 0 0-.835.197l.011-.005A1.856 1.856 0 0 0 0 5.855v12.172a1.86 1.86 0 0 0 1.858 1.858h20.283a1.86 1.86 0 0 0 1.858-1.858V5.855c0-.727-.419-1.357-1.029-1.66l-.011-.005z" />
                        </svg>
                    </a> contact@petconnect.com
                </p>
            </div>
            <div class="col-lg-6 col-sm-6">
                <img src="{{ asset('images/undraw_contact_us_re_4qqt.svg') }}" width="350" alt="">
            </div>
        </div>
        @include('partials.footer')
    </div>
</body>

</html>
