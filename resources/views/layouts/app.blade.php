<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>NMF news</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body class="nmf-body">
    <div class="nmf-parenthead">
        <header class="nmf-header">
            <div class="container">
                <div class="nmf-titlehead">
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <div class="nmf-toptitle">
                                <div class="nmf-othrlist">
                                    <div class="media">
                                        <img class="" src="{{ asset('frontend/images/sh.jpg') }}">
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Sports Hour</h5>
                                            <p class="font-12 nmf-grey">1.18M subscribers</p>
                                            <p class="font-12 nmf-grey">29K videos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nmf-othrlist">
                                    <div class="media">
                                        <img class="" src="{{ asset('frontend/images/bw.jpg') }}">
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Bolly Wrap</h5>
                                            <p class="font-12 nmf-grey">1.18M subscribers</p>
                                            <p class="font-12 nmf-grey">29K videos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nmf-othrlist">
                                    <div class="media">
                                        <img class="" src="{{ asset('frontend/images/dm.jpg') }}">
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Dhram Gyan </h5>
                                            <p class="font-12 nmf-grey">1.18M subscribers</p>
                                            <p class="font-12 nmf-grey">29K videos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nmf-othrlist">
                                    <div class="media">
                                        <img class="" src="{{ asset('frontend/images/nw.jpg') }}">
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">News Express</h5>
                                            <p class="font-12 nmf-grey">1.18M subscribers</p>
                                            <p class="font-12 nmf-grey">29K videos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="nmf-social">
                                <div class="nmf-social-itm"><a href="#"><img src="{{ asset('frontend/images/yt.svg') }}" /></a></div>
                                <div class="nmf-social-itm"><a href="#"><img src="{{ asset('frontend/images/fb.svg') }}" /></a></div>
                                <div class="nmf-social-itm"><a href="#"><img src="{{ asset('frontend/images/insta.svg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nmf-megaclass">
                <div class="container">
                    <div class="nmf-megalist">
                        <div class="nmf-canvas">
                            <div class="offcanvas offcanvas-start" id="demo">
                                <div class="offcanvas-header">
                                    <h1 class="offcanvas-title">Heading</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <p>Some text lorem ipsum.</p>
                                    <p>Some text lorem ipsum.</p>
                                    <p>Some text lorem ipsum.</p>
                                </div>
                            </div>
                            <a class="" data-bs-toggle="offcanvas" data-bs-target="#demo"><img src="{{ asset('frontend/images/threelines.svg') }}" /></a>
                        </div>
                        <nav class="navbar navbar-expand-sm" aria-label="Third navbar example">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img class="nmf-logo" src="{{ asset('frontend/images/logo.png') }}" /></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarsExample03">
                                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delhi NCR</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Rajya</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Khel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Manoranjan</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nmf-liveicon" href="#"><img src="{{ asset('frontend/images/live-tele.svg') }}" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main class="nmf-mainclass">
        @yield('content')
    </main>
    <footer class="nmf-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="nmf-sm">
                            <div class="nmf-ftlogo"><img src="{{ asset('frontend/images/logo.png') }}" /></div>
                            <div class="nmf-smrgt">
                                <h5 class="text-white font-20 font-600">Social Media</h5>
                                <div class="nmf-icons">
                                    <div class=""><a href="#"><img src="{{ asset('frontend/images/ft-yt.svg') }}" /></a></div>
                                    <div class=""><a href="#"><img src="{{ asset('frontend/images/ft-fb.svg') }}" /></a></div>
                                    <div class=""><a href="#"><img src="{{ asset('frontend/images/ft-insta.svg') }}" /></a></div>
                                </div>
                                <p class="text-white font-20 font-600">+91-123456789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="nmf-loc">
                            <h5 class="text-white font-20 font-600"><span><img src="{{ asset('frontend/images/nmf-loc.svg') }}" /></span> Address</h5>
                            <p class="text-center font-14 text-white">when an unknown printertook a galley of  type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="nmf-loc">
                            <h5 class="text-white font-20 font-600">Disclaimer</h5>
                            <p class="text-center font-14 text-white">
                                when an unknown printertook a galley of  type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="nmf-btmsponser">
                        <div class="nmf-toptitle">
                            <div class="nmf-othrlist">
                                <div class="media">
                                    <img class="" src="{{ asset('frontend/images/sh.jpg') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-16">Sports Hour</h5>
                                        <p class="font-12 nmf-grey">1.18M subscribers</p>
                                        <p class="font-12 nmf-grey">29K videos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nmf-othrlist">
                                <div class="media">
                                    <img class="" src="{{ asset('frontend/images/bw.jpg') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-16">Bolly Wrap</h5>
                                        <p class="font-12 nmf-grey">1.18M subscribers</p>
                                        <p class="font-12 nmf-grey">29K videos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nmf-othrlist">
                                <div class="media">
                                    <img class="" src="{{ asset('frontend/images/dm.jpg') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-16">Dhram Gyan </h5>
                                        <p class="font-12 nmf-grey">1.18M subscribers</p>
                                        <p class="font-12 nmf-grey">29K videos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nmf-othrlist">
                                <div class="media">
                                    <img class="" src="{{ asset('frontend/images/nw.jpg') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-16">News Express</h5>
                                        <p class="font-12 nmf-grey">1.18M subscribers</p>
                                        <p class="font-12 nmf-grey">29K videos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Include jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Include Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: true,
                    autoplay: true, // Add autoplay option
                    autoplayTimeout: 5000, // Adjust autoplay speed (milliseconds)
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            });
        </script>


    </body>
    </html>