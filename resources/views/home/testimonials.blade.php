<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Daya Amani Solutions</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"> <span class="primary">DAYA</span>AMANI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="about">About Us</a></li>
                            <li><a class="dropdown-item" href="team">Team</a></li>
                            <li><a class="dropdown-item" href="testimonials">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- BREADCUMBS -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Testimonials</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Testimonials</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END BREADCUMBS-->

    <!-- TESTIMONIAL-->
    <div class="testimonials bg-light py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Testimonals</h2>
            </div>
            <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel quas provident, earum explicabo repellendus asperiores optio. Minus dicta perferendis, aspernatur temporibus dolor quidem, dolorum quo accusamus quas maxime, assumenda omnis.</p>
            <div class="row mt-5">
                @foreach($testimonials as $testimonial)
                <div class="col-md-6 mt-4" data-aos="fade-right">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body testimonials-item p-5">
                            <img src="/image/{{$testimonial->image}}" alt="" class="img-testimonials float-start rounded-circle me-3">
                            <strong class="d-block">{{$testimonial->title}}</strong>
                            <small class="text-muted">CEO & Founder</small>
                            <p class="fst-italic mt-3 fs-5">
                                <i class="fa fa-quote-left"></i>
                                {{$testimonial->description}}
                            </p>
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ENDTESTIMONIALS-->

    <!-- FOOTER -->
    <footer class="mt-5">
        <div class="footer-top mt-5 bg-dark text-white p-5">
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">{{$contact->name}}</h4>
                            <p>{{$contact->description}}</p>
                            <strong>Phone</strong> : <span>{{$contact->telepon}}</span>
                            <br />
                            <strong>Email</strong> : <span>{{$contact->email}}</span>
                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">Our Services</h4>
                            <ul class="list-group list-unstyled">
                                @foreach($services as $service)
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        {{$service->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">Useful Links</h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Portofolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">Join Our Newsletter</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, dolore?</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="yourmail@example.com">
                                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            &copy; Copyright <strong>DayaAmani</strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Designe by me
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-links float-end">
                            <a href="" class="mx-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- TO TOP -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- END TO TOP -->

    <script src="/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>