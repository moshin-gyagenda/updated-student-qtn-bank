<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Students Question Bank</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            <header id="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-top">
                            <div class="d-flex justify-content-between align-items-center">
                                <ul class="navbar-top-left-menu">
                                    <li class="nav-item">
                                        <a href="pages/index-inner.html" class="nav-link">Creating a Retake Free
                                            Environment For all Students</a>
                                    </li>

                                </ul>
                                <ul class="navbar-top-right-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Sign in</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a class="" href="#" style="color: white;">
                                        <img src="assets/images/f1.png" height="60px;" width="60px" alt="" />
                                        Students Question Bank</a>
                                </div>
                                <div>
                                    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="navbar-collapse justify-content-center collapse"
                                        id="navbarSupportedContent">
                                        <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                            <li>
                                                <button class="navbar-close">
                                                    <i class="mdi mdi-close"></i>
                                                </button>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{ route('home') }}"
                                                    style="text-transform: capitalize;">Home</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#"
                                                    style="text-transform: capitalize;">About us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/sports.html"
                                                    style="text-transform: capitalize;">Contact us</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <ul class="social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <!-- partial -->
            <div class="flash-news-banner">
                <div class="container">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <span class="badge badge-dark mr-3">Empowering MUBS Students for Success</span>
                            <p class="mb-0">
                                By empowering MUBS students with comprehensive and high-quality question banks.
                        </div>
                        <div class="d-flex">
                            <span class="mr-3 text-danger">{{ date('l, F j, Y', strtotime('+0 day')) }}</span>
                            {{-- <span class="text-danger">27°C,Kampala</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="position-relative">
                                <img src="assets/images/graduation.jpeg" alt="banner" class="img-fluid" />
                                <div class="banner-content">
                                    {{-- <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      global news
                    </div> --}}
                                    <h1 class="mb-0" style="text-transform: uppercase">Welcome to Student Question
                                        Bank</h1>
                                    <h2 class="mb-2">
                                        Creating a Retake Free Environment For all Students
                                    </h2>
                                    <div class="fs-12">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h2>RECENTLY ADDED</h2>

                                    <div
                                        class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Financial Management Passed Papers</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="assets/images/financial.jpg" alt="thumb"
                                                class="img-fluid img-lg" />
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Business Ethics Past Papers</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="assets/images/ethics.jpg" alt="thumb"
                                                class="img-fluid img-lg" height="30px" />
                                        </div>
                                    </div>

                                    <div class="d-flex pt-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Research Methods Past Papers</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="assets/images/research.jpg" alt="thumb"
                                                class="img-fluid img-lg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up">

                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="assets/images/f1.png" height="60px" width="60px" class="footer-logo"
                                    alt="" /> Students Question Bank
                                <h5 class="font-weight-normal mt-4 mb-5">
                                    By empowering MUBS students with comprehensive
                                    and high-quality question banks, they will have the tools
                                    to excel in their coursework and achieve their academic goals.
                                </h5>
                                <ul class="social-media mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h3 class="font-weight-bold mb-3">RECENT NEWS</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/financial.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Recently added passed papers for financial Management
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/ethics.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Recently added passed papers for Business Ethics
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/research.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600 mb-3">
                                                        Recently added passed papers for Research Methods
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="font-weight-bold mb-3">QUICK LINKS</h3>
                                <div class="footer-border-bottom pb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Home</h5>
                                        {{-- <div class="count">1</div> --}}
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">About us</h5>
                                        {{-- <div class="count">1</div> --}}
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Contact us</h5>
                                        {{-- <div class="count">1</div> --}}
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Coming Soon</h5>
                                        {{-- <div class="count">1</div> --}}
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Other</h5>
                                        {{-- <div class="count">1</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="fs-14 font-weight-600">
                                        © 2024 @ <a href="#" target="_blank" class="text-white"> Students
                                            Question Bank</a>. All rights reserved.
                                    </div>
                                    <div class="fs-14 font-weight-600">
                                        Designed by <a href="#" target="_blank" class="text-white">Khris
                                            Gadgets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
