<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <title>Document</title>
</head>
<body>
    {{-- header section --}}
    <header>
        {{-- navbar section --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid nav-class">
                <p class="navbar-text pt-2 offset-1 navfont mt-2">Free Shipping on All orders Over 75$!</p>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse offset-2 fs-6" id="navbarNavDropdown">
                    <ul class="navbar-nav offset-4 justify-content-between navfont">
                        <li class="nav-item px-2">
                            @if (Auth::user())
                            <a class="nav-link active navbar-text" aria-current="page" href="{{ route('showuser') }}">My Account</a>
                            @else
                            <a class="nav-link active navbar-text" aria-current="page" href="{{route('login') }}">Login</a>
                            @endauth
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link navbar-text" href="#">Whishlist</a>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle navbar-text" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Currency:USD
                            </a>
                            <ul class="dropdown-menu border-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">EGP</a></li>
                                <li><a class="dropdown-item" href="#">AED</a></li>
                                <li><a class="dropdown-item" href="#">SAR</a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link cart-edit navbar-text" href="{{ route('mycart') }}"><i class="fa-solid fa-cart-shopping"></i>
                                My Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- end of navbar section --}}
        {{-- search section --}}
        <div class="row d-flex bg-white justify-content-center test rounded-pill searchbar pb-5">
            <form class="d-flex search-edit border rounded-pill" action="{{ route('product.search') }}">
                <input class="form-control-plaintext font1" type="search" placeholder="Search Here What You Need..."
                    aria-label="Search" id="search" name="search">
                <button class="border-start" type="submit"><i class="fa-solid fa-magnifying-glass glass"></i></button>
            </form>
        </div>
        <div class="container w-50" id="result">

        </div>
        {{-- end of search section --}}
        <div class="container-fluid footer-bg pt-4 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-2 text-start mb-2">
                        <p class="font2 text-white mt-1">Fashion</p>
                    </div>
                    <div class="col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 text-end px-0">
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Home</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Women</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Men</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Footwear</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Accessories</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Sales</a>
                        <a class="text-decoration-none px-sm-1 px-lg-2 links text-wrap font3" href="#">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    {{-- Creating the Footer Section --}}
    <footer>
        <div class="container-fluid footer-color pt-5 px-0" id="footer">
            <div class="container pt-5">
                <div class="row justify-content-evenly">
                    <div class="col-lg-2 offset-lg-1 col-sm-6 col-md-6 col-7 ms-5 flex-column">
                        <div>
                            <h5 class="h5 fw-bold text-white text-uppercase pb-3">shops
                            </h5>
                            <ul class="list-unstyled">
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">New In</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Women</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Men</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Schuhe
                                        Shoes</a>
                                </li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4 text-nowrap">Bags &
                                        Accessories</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Top
                                        Brands</a>
                                </li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4 text-nowrap">Sale & Special
                                        Offers</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Lookbook</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-9 offset-1 flex-column pb-3 pb-sm-0 ms-auto ms-sm-0">
                        <div>
                            <h5 class="h5 fw-bold text-white text-uppercase pb-3">information
                            </h5>
                            <ul class="list-unstyled">
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">About us</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Customer
                                        Service</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">New
                                        Collection</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Best
                                        Sellers</a>
                                </li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4">Manufactures</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Privacy
                                        Policy</a>
                                </li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4 text-nowrap">Terms &
                                        Conditions</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 col-md-5 col-7 offset-1 flex-column pb-3 pb-sm-0 ms-sm-5">
                        <div>
                            <h5 class="h5 fw-bold text-white text-uppercase pb-3 text-nowrap">customer service
                            </h5>
                            <ul class="list-unstyled">
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Search
                                        Terms</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Advanced
                                        Search</a></li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4 text-nowrap">Orders And
                                        Returns</a></li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Contact
                                        Us</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">RSS</a></li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4 text-nowrap">Help & FAQs</a>
                                </li>
                                <li class="pb-2"><a href="#"
                                        class="footer-font text-decoration-none font4">Consultant</a>
                                </li>
                                <li class="pb-2"><a href="#" class="footer-font text-decoration-none font4">Store
                                        Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-7 offset-1 flex-column pb-3 pb-sm-0 ms-sm-6">
                        <div>
                            <h5 class="h5 fw-bold text-white text-uppercase pb-2">newsletter
                            </h5>
                            <ul class="list-unstyled">
                                <li class="pb-3">
                                    <p class="footer-font text-decoration-none text-nowrap font4">Sign Up For News
                                        Letter</p>
                                </li>
                                <li class="pb-3">
                                    <form action="">
                                        <input type="text" placeholder="Type Your E-mail"
                                            class="mb-2 w-100 text-center bg-transparent border border-1">
                                        <button type="submit" class="w-100 sub-button">Subscribe</button>
                                    </form>
                                </li>
                            </ul>
                            <div
                                class="row flex-row pt-lg-1 py-2 py-lg-0 justify-content-xxl-center justify-content-lg-evenly me-2">
                                <div
                                    class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-3 resize px-sm-3 ps-md-4 px-xl-2 ps-lg-2">
                                    <a href="https://facebook.com" target="blank"> <i
                                            class="fa-brands fa-square-facebook fa-2x font4"></i> </a>
                                </div>
                                <div class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-2 px-sm-3 ps-md-4 px-xl-2 ps-lg-3">
                                    <a href="https://behance.net" target="blank"> <i
                                            class="fa-brands fa-square-behance fa-2x font4"></i> </a>
                                </div>
                                <div class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-2 px-sm-3 ps-md-4 px-xl-2 ps-lg-3">
                                    <a href="https://vimeo.com" target="blank"> <i
                                            class="fa-brands fa-vimeo fa-2x font4"></i> </a>
                                </div>

                                <div class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-2 px-sm-3 ps-md-4 px-xl-2 ps-lg-3">
                                    <a href="https://twitter.com/home?lang=en" target="blank"> <i
                                            class="fa-brands fa-square-twitter fa-2x font4"></i> </a>
                                </div>

                                <div class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-2 px-sm-3 ps-md-4 px-xl-2 ps-lg-3">

                                    <a href="https://www.youtube.com/" target="blank"> <i
                                            class="fa-brands fa-square-youtube fa-2x font4"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-bg">
            <div class="container pt-3 px-xxl-4 px-xl-4 px-lg-5 px-md-4 d-flex">
                <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-4 col-sm-4 col-4">
                    <p class="px-xxl-4 offset-1 font5">© 2014 ELLA Fashion Store Shopify. All Rights Reserved. Ecommerce
                        Software by Shopify.</p>
                </div>
                <div
                    class="col-xxl-6 col-xl-8 col-lg-6 col-md-8 px-md-4 px-sm-4 col-sm-8 col-8 px-4 text-end footer-padding">
                    <a href="#" class="footer-font font-resize text-decoration-none font5 px-2">VISA</a>
                    <a href="#" class="footer-font font-resize text-decoration-none font5 px-2">Master Card</a>
                    <a href="#" class="footer-font font-resize text-decoration-none font5 px-2">PayPal</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- end of footer section --}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<script>
    $(document).ready(function () {
        $('#search').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('#result').html(data);
                }
            });
        });
    });

</script>
</html>
