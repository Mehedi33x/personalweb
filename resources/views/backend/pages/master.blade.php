<!DOCTYPE html>
<html lang="en">

<head>

    <title>My Resume</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ url('/backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/backend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/backend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/backend/assets/css/owl.theme.default.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('/backend/assets/css/tooplate-ben-resume-style.css') }}">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    @include('backend.fixed.header')


    {{-- main Body --}}
    @yield('content')
    <!-- HERO -->

    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-5 col-md-5 col-10">
                    <img src="{{ url('/backend/assets/images/ben.jpg') }}" class="img-fluid"
                        alt="Ben Resume HTML Template">
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                    <div class="hero-text">

                        <h1 class="hero-title">Mehedi Hassan</h1>
                        <p href="#" class="email-link">
                            Web Developer | PHP-Laravel
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="mb-4">This is Mehedi Hassan's Resume</h3>
                    <p>
                        With an experience as a PHP/Laravel Developer, I have a proven track record in developing
                        high-quality and maintainable software for e-commerce platforms. My technical proficiency in
                        PHP, Laravel and JavaScript coupled with my problem-solving skills and team collaboration
                        abilities, have led to significant improvements in system efficiency and user engagement. One of
                        my biggest career achievements is playing a key role in the success of a revolutionary
                        e-commerce startup, enabling eCommerce merchants to build long-lasting customer relationships.
                    </p>
                    <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                        <li><strong>Full Name :</strong> Mehedi Hassan </li>

                        <li><strong>Date of Birth:</strong> 28 May 1998</li>

                        <li><strong>Website :</strong> </li>

                        <li><strong>Email :</strong> hmehedi3227@gmail.com </li>
                    </ul>
                </div>

                <div class="col-lg-5 mx-auto col-md-6 col-12">
                    <img src="{{ url('/backend/assets/images/true-agency.jpg') }}" class="about-image img-fluid"
                        alt="Ben's Resume HTML Template">
                </div>

            </div>

        </div>
    </section>
    <!-- FAQ -->
    {{-- <section class="faq section-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-12">

                    <h3 class="mb-5">Frequently Asked Questions</h3>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Are those HTML templates absolutely free for any kind of usage?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Yes, they are 100% free and there is no hidden charge.</p>

                                    <p>They can be used for your commercial websites.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I use them as a CMS theme or a part of website builder?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Yes, you can use them.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        I cannot find a suitable HTML template. Can I request new template?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Yes, please tell us what you need. We will try our best to fulfill it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Can I redistribute your templates?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>No, this is totally NOT allowed. Please do not redistribute our HTML templates.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How do I support Tooplate?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Please spread a word about Tooplate website to your colleagues and friends.</p>
                                </div>
                            </div>
                        </div>

                        <span class="faq-info-text">Please send us a message if you have anything to say. Send an email
                            message to <strong>contact (at) tooplate (dot) com</strong></span>

                    </div>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section> --}}
    {{-- footer --}}
    @include('backend.fixed.footer')

    <!-- SCRIPTS -->
    <script src="{{ url('/backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('/backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/backend/assets/js/smoothscroll.js') }}"></script>
    <script src="{{ url('/backend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/backend/assets/js/custom.js') }}"></script>

</body>

</html>
