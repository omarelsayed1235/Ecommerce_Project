@extends('layouts.main')
@section('content')
{{-- slideshow section --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://fashionmagazine.com/wp-content/uploads/2019/03/2019-03-06-1.jpg"
                class="d-block w-100 images" alt="..." height="580">
            <div class="carousel-caption d-sm-block d-md-block caption w-25 top-50 start-50 translate-middle h-25">
                <h6 class="text-uppercase mt-3">Something is Better</h6>
                <h1 class="text-uppercase h1 fs-3">fashion lorem</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://t4.ftcdn.net/jpg/03/03/61/39/360_F_303613999_boeluBi6e7QIa47sg2CAxUNT5VUwWuFy.jpg"
                class="d-block w-100 images" alt="..." height="580">
            <div class="carousel-caption d-sm-block d-md-block caption w-25 top-50 start-50 translate-middle h-25">
                <h6 class="text-uppercase mt-3">Something is Better</h6>
                <h1 class="text-uppercase h1 fs-3">fashion lorem</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCxCt5L-PYZV8OBS2fknWZ6nH4oxcTcFLyOg&usqp=CAU"
                class="d-block w-100 images" alt="..." height="580">
            <div class="carousel-caption d-sm-block d-md-block caption w-25 top-50 start-50 translate-middle h-25">
                <h6 class="text-uppercase mt-3">Something is Better</h6>
                <h1 class="text-uppercase h1 fs-3">fashion lorem</h1>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- end of slide show section --}}
{{-- new trend section --}}
<div class="container-fluid bg-white pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 flex-column">
                <div class="">
                    <img src="https://img.freepik.com/premium-photo/elegant-beautiful-woman-black-dress-hat_149155-3288.jpg?w=2000"
                        alt="" class="img-fluid ps-1">
                    <h5 class="spacing fw-light pt-4">Hot Collection</h5>
                    <h2>New Trend For Women</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam tempore vel sit et minima
                        incidunt suscipit odit ducimus. Asperiores ullam nobis incidunt laudantium eum quidem
                        assumenda fugit optio eos provident!</p>
                    <button type="button"
                        class="btn btn-outline-secondary px-4 mt-3 mx-xxl-0 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-4">Shop
                        Now</button>
                </div>
            </div>
            <div class="col-xxl-5 flex-column">
                <div>
                    <img src="https://img.freepik.com/premium-photo/elegant-beautiful-woman-black-dress-hat_149155-3288.jpg?w=2000"
                        alt="" class="img-fluid pb-4">
                    <img src="https://manofmany.com/wp-content/uploads/2019/04/David-Gandy.jpg" alt=""
                        class="img-fluid pt-3">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-5">
                    <hr>
                </div>
                <div class="col-2">
                    <p class="text-center fs-5 hr-font">Featured Items</p>
                </div>
                <div class="col-5">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end of new Trend section --}}
{{-- featured items --}}
<div class="container-fluid mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-unstyled d-inline-flex">
                    <li class="pb-2 px-4"><a href="{{ route('test') }}" class="footer-font text-decoration-none font4">All</a></li>
                    <li class="pb-2 px-4"><a href="{{ route('index.men') }}" class="footer-font text-decoration-none font4">Men</a></li>
                    <li class="pb-2 px-4"><a href="{{ route('index.women') }}" class="footer-font text-decoration-none font4">Women</a></li>
                    <li class="pb-2 px-4"><a href="{{ route('index.kids') }}" class="footer-font text-decoration-none font4">Kids</a></li>
                </ul>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-3">
                @foreach ($products as $product )
                <div class="col">
                    <div class="card mb-md-2 border-0 text-nowrap">
                        <a href="{{ route('search.show',$product->id) }}">
                            <img src="{{ $product->getFirstMediaUrl() }}"
                                class="card-img-top image-hover" alt="..." height="400">
                                <div class="hide">
                                    <i class="fa-solid fa-eye fa-2x eye-color"></i>
                                </div>
                        </a>
                        <div class="card-img-overlay card2 top-0 end-50 pb-4 pt-2">
                            <h5 class="card-title text-white card-font fw-bold">${{ $product->price }}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            @for ($i = 0; $i <$product->rating ; $i++)
                            <i class="fa-solid fa-star star"></i>
                            @endfor
                            @for ($i = $product->rating; $i < 5 ; $i++)
                            <i class="fa-regular fa-star"></i>
                            @endfor
                            <div class="mt-3">
                                <a href="" class="btn border-secondary rounded-circle me-2"><i
                                        class="fa-solid fa-heart"></i></a>
                                <a href="" class="btn border-secondary rounded-circle me-2"><i
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href="" class="btn border-secondary rounded-circle"><i
                                        class="fa-solid fa-share-nodes"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- end of featured items --}}
<div class="d-flex mb-5">
    <div class="col-6">
        <img src="https://manofmany.com/wp-content/uploads/2019/04/David-Gandy.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-6">
        <img src="https://img.freepik.com/premium-photo/elegant-beautiful-woman-black-dress-hat_149155-3288.jpg?w=2000"
            alt="" class="img-fluid">
    </div>
</div>
{{-- trending items --}}
<div class="container-fluid">
    <div class="container">
        <div class="row pt-4">
            <div class="col-5">
                <hr>
            </div>
            <div class="col-2">
                <p class="text-center fs-5 hr-font">Trending Items</p>
            </div>
            <div class="col-5">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="row row-cols-1 row-cols-md-4 g-3">
                @foreach ($trendings as $trending )
                <div class="col">
                    <div class="card mb-md-2 border-0">
                        <a href="{{ route('search.show',$trending->id) }}">
                            <img src="{{ $trending->getFirstMediaUrl() }}"
                                class="card-img-top image-hover" alt="..." height="400">
                                <div class="hide">
                                    <i class="fa-solid fa-eye fa-2x eye-color"></i>
                                </div>
                        </a>
                        <div class="card-img-overlay card2 top-0 end-50 pb-4 pt-2">
                            <h5 class="card-title text-white card-font fw-bold">${{ $trending->price }}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $trending->name }}</h5>
                            @for ($i = 0; $i <$trending->rating ; $i++)
                            <i class="fa-solid fa-star star"></i>
                            @endfor
                            @for ($i = $trending->rating; $i < 5 ; $i++)
                            <i class="fa-regular fa-star"></i>
                            @endfor
                            <div class="mt-3">
                                <a href="" class="btn border-secondary rounded-circle me-2"><i
                                        class="fa-solid fa-heart"></i></a>
                                <a href="" class="btn border-secondary rounded-circle me-2"><i
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href="" class="btn border-secondary rounded-circle"><i
                                        class="fa-solid fa-share-nodes"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 text-center my-5">
                <a href="" class="btn border-secondary px-4">Load More</a>
            </div>
        </div>
    </div>
</div>
{{-- end of trending items --}}
<div class="image-background">
    <div class="text-center pb-1">
        <i class="fa-solid fa-quote-left mt-5 fa-2x quote-icon"></i>
        <div class="text-center mx-5 px-5 mb-5 mt-4 pb-5">
            <p class="text-white text-wrap mx-5 px-5 fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis minima debitis accusantium excepturi architecto maxime non dolor? Molestias quibusdam
                accusamus magni, est quidem</p>
            <img src="https://manofmany.com/wp-content/uploads/2019/04/David-Gandy.jpg" alt="" class="mb-1 mt-5"
                height="75">
            <p class="text-white pt-0 mb-0 text-uppercase">md shahin alam</p>
            <p class="text-white pt-0">Ceo Of TTCM</p>
        </div>
    </div>
</div>
{{-- latest blog --}}
<div class="container-fluid">
    <div class="container">
        <div class="row pt-4">
            <div class="col-5">
                <hr>
            </div>
            <div class="col-2">
                <p class="text-center fs-5 hr-font">Latest Blog</p>
            </div>
            <div class="col-5">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card mb-md-2 border-0">
                        <img src="https://manofmany.com/wp-content/uploads/2019/04/David-Gandy.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Some Headline Here</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, autem dicta,
                                pariatur nesciunt ipsam inventore quibusdam tempore accusamus aut assumenda
                                reiciendis eveniet sunt, quidem saepe aliquid sed molestias qui nemo.</p>
                            <div class="mt-3">
                                <button class="btn border-secondary px-4">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-md-2 border-0">
                        <img src="https://media.istockphoto.com/photos/image-of-open-antique-book-on-wooden-table-with-glitter-overlay-picture-id1354441996?b=1&k=20&m=1354441996&s=170667a&w=0&h=O4JDagXhIh1N13PNN6G4_L5KB5QPZryin7FOrZnzYvc="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Some Headline Here</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, autem dicta,
                                pariatur nesciunt ipsam inventore quibusdam tempore accusamus aut assumenda
                                reiciendis eveniet sunt, quidem saepe aliquid sed molestias qui nemo.</p>
                            <div class="mt-3">
                                <button class="btn border-secondary px-4">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-md-2 border-0">
                        <img src="https://thumbs.dreamstime.com/b/old-opened-book-heart-shaped-paper-sheets-dark-background-stars-toned-vintage-selective-focus-lights-world-day-teachers-175555860.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Some Headline Here</h3>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, autem dicta,
                                pariatur nesciunt ipsam inventore quibusdam tempore accusamus aut assumenda
                                reiciendis eveniet sunt, quidem saepe aliquid sed molestias qui nemo.
                            <div class="mt-3">
                                <button class="btn border-secondary px-4">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center my-5">
                <a href="" class="btn border-secondary px-4">Load More</a>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-5">
                <hr>
            </div>
            <div class="col-2">
                <p class="text-center fs-5 hr-font">Shop By Brand</p>
            </div>
            <div class="col-5">
                <hr>
            </div>
            <div class="col-3">
                <img src="https://logonoid.com/images/themeforest-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://logonoid.com/images/themeforest-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://logonoid.com/images/themeforest-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://logonoid.com/images/themeforest-logo.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
{{-- end of latest blog --}}
@endsection
